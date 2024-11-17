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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengirim'); // Primary key
            $table->string('nama_pengirim', 255);
            $table->string('no_hp_pengirim', 255);
            $table->string('alamat_pengirim', 255);
            $table->string('biaya_pengiriman', 255);
            $table->date('tgl_pengiriman');
            $table->string('status_pengiriman', 255);
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->timestamps();

            // Foreign keys (jika perlu)
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('set null');
            $table->foreign('id_pembeli')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
