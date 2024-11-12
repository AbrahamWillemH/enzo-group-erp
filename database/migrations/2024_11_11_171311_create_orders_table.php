<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('user_name');
            $table->string('product_name');
            $table->integer('quantity');
            $table->date('deadline_date');
            $table->enum('status', ['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'])->default('Menunggu Konfirmasi');
            $table->enum('progress', ['Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai'])->default('Pemesanan Bahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
