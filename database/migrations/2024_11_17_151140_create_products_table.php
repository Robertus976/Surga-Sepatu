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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk'); // Primary key
            $table->string('nama_produk', 255);
            $table->string('jenis_produk', 255);
            $table->string('harga', 255);
            $table->string('ukuran', 255);
            $table->integer('jumlah_stok');
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->timestamps();

            // Foreign keys (jika perlu)
            $table->foreign('id_pembeli')->references('id')->on('users')->onDelete('set null');
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
