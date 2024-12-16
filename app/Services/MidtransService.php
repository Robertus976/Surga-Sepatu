<?php

namespace App\Services;

use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;

class MidtransService
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY'); // Set server key dari .env
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY'); // Set client key dari .env
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false); // Tentukan environment (production atau sandbox)
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    /**
     * Membuat Snap Token untuk transaksi Midtrans
     *
     * @param object $order
     * @param int $totalAmount
     * @return string $snapToken
     */
    public function createSnapToken($order, $totalAmount)
{
    // Validasi nilai totalAmount
    if (!is_numeric($totalAmount) || $totalAmount <= 0) {
        return response()->json(['error' => 'Total amount is invalid']);
    }

    // Persiapkan data transaksi
    $transaction_details = array(
        'order_id' => $order->midtrans_order_id,
        'gross_amount' => (float) $totalAmount, // Pastikan ini berupa float
    );

    // Data pelanggan
    $customer_details = array(
        'first_name'    => $order->name,
        'phone'         => $order->phone,
        'email'         => 'customer@example.com', // Anda bisa menggunakan email pengguna jika ada
    );

    // Data transaksi lengkap
    $transaction = array(
        'transaction_details' => $transaction_details,
        'customer_details'    => $customer_details,
    );

    try {
        // Membuat Snap Token
        $snapToken = Snap::getSnapToken($transaction);
        return $snapToken;
    } catch (\Exception $e) {
        // Tangani jika ada error
        return response()->json(['error' => 'Midtrans transaction failed: ' . $e->getMessage()]);
    }
}
}
