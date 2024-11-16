<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabel untuk mengecek stok real time barang
        Schema::create('kartu_persediaan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_barang'); 
            $table->integer('kode_bahan'); 
            $table->string('nama_bahan'); 
            $table->integer('stok')->default(0); 
            $table->timestamps();
        });

        //Tabel untuk detail transaksi (barang masuk/keluar)
        Schema::create('transaksi_persediaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained('kartu_persediaan')->onDelete('cascade'); // Relasi ke tabel kartu_persediaan
            $table->enum('tipe_transaksi', ['in', 'out']); 
            $table->integer('kode_bahan'); 
            $table->integer('jumlah_barang'); 
            $table->date('tanggal_transaksi'); 
            $table->string('keterangan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_persediaan');
        Schema::dropIfExists('kartu_persediaan');
    }
}
