<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi'); // Primary key
            $table->date('tanggal_transaksi');
            $table->string('total_pembayaran', 255);
            $table->string('metode_pembayaran', 255);
            $table->string('nota_pembayaran', 255)->nullable();
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('users')->onDelete('set null');
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
