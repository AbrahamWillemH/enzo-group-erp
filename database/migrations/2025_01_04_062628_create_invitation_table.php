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
        Schema::create('invitation_form', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('order_name');
            $table->string('address');
            $table->string('phone');
            $table->string('instagram')->nullable();
            $table->integer('quantity');
            $table->string('type');
            $table->date('deadline_date');
            $table->string('finishing');
            $table->enum('status', ['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'])->default('Menunggu Konfirmasi');
            $table->enum('progress', ['Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai'])->default('Pemesanan Bahan');
            $table->string('grooms_name');
            $table->string('grooms_nickname');
            $table->string('grooms_dad');
            $table->string('grooms_mom');
            $table->string('grooms_address');
            $table->string('brides_name');
            $table->string('brides_nickname');
            $table->string('brides_dad');
            $table->string('brides_mom');
            $table->string('brides_address');
            $table->date('akad_pemberkatan_date');
            $table->time('akad_pemberkatan_time');
            $table->string('akad_pemberkatan_location');
            $table->date('reception_date');
            $table->time('reception_time');
            $table->string('reception_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation');
    }
};
