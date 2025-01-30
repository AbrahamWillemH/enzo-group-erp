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
        Schema::table('invitation', function(Blueprint $table) {
            $table->enum('subprocess', ['Cetak', 'Laminasi', 'Foil', 'Proses Lem', 'Finishing', 'Packing']);
        });

        Schema::table('souvenir', function(Blueprint $table) {
            $table->enum('subprocess', ['Potong Kain', 'Proses Sablon/Decal', 'Proses Jahit', 'Proses Kemas', 'Packing']);
        });

        Schema::table('packaging', function(Blueprint $table) {
            $table->enum('subprocess', ['Cetak', 'Laminasi', 'Foil', 'Proses Lem', 'Packing']);
        });

        // Update untuk tabel souvenir
        DB::statement("ALTER TABLE `souvenir` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Selesai', 'Selesai Beneran') DEFAULT 'Pending'");

        // Update untuk tabel invitation
        DB::statement("ALTER TABLE `invitation` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Selesai', 'Selesai Beneran') DEFAULT 'Pending'");

        // Update untuk tabel packaging
        DB::statement("ALTER TABLE `packaging` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Selesai', 'Selesai Beneran') DEFAULT 'Pending'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('subprocess');
        });

        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('subprocess');
        });

        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('subprocess');
        });

        // Revert untuk tabel souvenir
        DB::statement("ALTER TABLE `souvenir` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");

        // Revert untuk tabel invitation
        DB::statement("ALTER TABLE `invitation` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");

        // Revert untuk tabel packaging
        DB::statement("ALTER TABLE `packaging` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");
    }
};
