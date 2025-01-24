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
        Schema::create('rekap_stok', function (Blueprint $table) {
            $table->string('kode_barang')->primary();
            $table->string('jenis_inventory')->nullable();
            $table->string('nama_barang')->nullable();
            $table->float('stok_awal')->nullable();
            $table->float('barang_masuk')->nullable();
            $table->float('barang_keluar')->nullable();
            $table->float('stok_akhir')->nullable();
            $table->decimal('harga',15,2)->nullable();
            $table->decimal('total_harga',20,2)->nullable();
        });
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_inventory')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('rekap_stok')->onDelete('cascade');
            $table->string('nama_barang')->nullable();
            $table->float('jumlah_barang')->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->decimal('total_harga', 20, 2)->nullable();
            $table->string('catatan')->nullable();
        });
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_inventory')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('rekap_stok')->onDelete('cascade');
            $table->string('nama_barang')->nullable();
            $table->float('jumlah_barang')->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->decimal('total_harga', 20, 2)->nullable();
            $table->string('nama_cust')->nullable();
            $table->integer('jumlah_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_stok');
        Schema::dropIfExists('barang_masuk');
        Schema::dropIfExists('barang_keluar');
    }
};
