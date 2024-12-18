<?php
namespace App\Services;

use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MidtransService
{
    public function __construct()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createSnapToken($order, $totalAmount)
    {
        $params = [
            'transaction_details' => [
                'order_id' => $order->midtrans_order_id,
                'gross_amount' => $totalAmount,
            ],
            'customer_details' => [
                'first_name'    => $order->name,
                'email'         => Auth::user()->email,
                'phone'         => $order->phone,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            Log::info('Snap token berhasil dibuat:', ['token' => $snapToken]);
            return $snapToken;
        } catch (\Exception $e) {
            Log::error('Gagal membuat snap token Midtrans: ' . $e->getMessage());
            return null;
        }
    }
}
