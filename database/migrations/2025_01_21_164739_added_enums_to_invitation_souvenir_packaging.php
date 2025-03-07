<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update untuk tabel souvenir
        DB::statement("ALTER TABLE `souvenir` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");

        // Update untuk tabel invitation
        DB::statement("ALTER TABLE `invitation` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");

        // Update untuk tabel packaging
        DB::statement("ALTER TABLE `packaging` CHANGE `progress` `progress` ENUM('Pending', 'Fix', 'Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pending'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert untuk tabel souvenir
        DB::statement("ALTER TABLE `souvenir` CHANGE `progress` `progress` ENUM('Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pemesanan Bahan'");

        // Revert untuk tabel invitation
        DB::statement("ALTER TABLE `invitation` CHANGE `progress` `progress` ENUM('Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pemesanan Bahan'");

        // Revert untuk tabel packaging
        DB::statement("ALTER TABLE `packaging` CHANGE `progress` `progress` ENUM('Pemesanan Bahan', 'Proses Produksi', 'Finishing', 'Selesai') DEFAULT 'Pemesanan Bahan'");
    }
};
