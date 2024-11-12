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
        Schema::create('invitation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('user_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('instagram')->nullable();
            $table->string('product_name');
            $table->integer('quantity');
            $table->string('type');
            $table->date('deadline_date');
            $table->string('finishing');
            $table->enum('status', ['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'])->default('Menunggu Konfirmasi');
            $table->enum('progress', ['Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai'])->default('Pemesanan Bahan');
            $table->string('bride_name');
            $table->string('bride_nickname');
            $table->string('bride_father');
            $table->string('bride_mother');
            $table->string('bride_parents_address');
            $table->string('groom_name');
            $table->string('groom_nickname');
            $table->string('groom_father');
            $table->string('groom_mother');
            $table->string('groom_parents_address');
            $table->date('akad_pemberkatan_date');
            $table->time('akad_pemberkatan_time');
            $table->string('akad_pemberkatan_location');
            $table->date('reception_date');
            $table->time('reception_time');
            $table->string('reception_location');
            $table->timestamps();
        });

        Schema::create('souvenir', function (Blueprint $table) {
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

        Schema::create('seminarkit', function (Blueprint $table) {
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

        Schema::create('packaging', function (Blueprint $table) {
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
        Schema::dropIfExists('invitations');
        Schema::dropIfExists('souvenir');
        Schema::dropIfExists('seminarkit');
        Schema::dropIfExists('packaging');
    }
};
