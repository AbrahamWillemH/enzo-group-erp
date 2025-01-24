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
        Schema::create('rekap', function (Blueprint $table) {
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('stok_awal');
            $table->integer('barang_masuk');
            $table->integer('barang_keluar');
            $table->integer('stok_akhir');
            $table->timestamps();
        });
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
