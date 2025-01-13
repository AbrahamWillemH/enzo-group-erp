@ -1,49 +0,0 @@
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabel master barang
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_barang');
            $table->integer('kode_bahan');
            $table->string('nama_bahan');
            $table->integer('stok_awal')->default(0);
            $table->integer('stok_sekarang')->default(0);
            $table->timestamps();

            // Menambahkan unique constraint gabungan
            $table->unique(['kode_bahan', 'jenis_barang']);
        });

        // Tabel untuk detail transaksi (barang masuk/keluar)
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained('inventory')->onDelete('cascade'); // Relasi ke tabel inventory
            $table->string('jenis_barang'); // Menambahkan jenis barang
            $table->date('tanggal_transaksi');
            $table->integer('kode_bahan');
            $table->string('nama_bahan');
            $table->enum('tipe_transaksi', ['Pembelian', 'Pemakaian']);
            $table->integer('jumlah_barang');
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
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('inventory_transactions');
    }
};
