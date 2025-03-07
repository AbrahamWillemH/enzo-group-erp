<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE `packaging` CHANGE `subprocess` `subprocess` VARCHAR(50)');
        DB::statement('ALTER TABLE `invitation` CHANGE `subprocess` `subprocess` VARCHAR(50)');
        DB::statement('ALTER TABLE `souvenir` CHANGE `subprocess` `subprocess` VARCHAR(50)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE `packaging` CHANGE `subprocess` `subprocess` ENUM('Cetak', 'Laminasi', 'Foil', 'Proses Lem', 'Packing')");
        DB::statement("ALTER TABLE `invitation` CHANGE `subprocess` `subprocess` ENUM('Cetak', 'Laminasi', 'Foil', 'Proses Lem', 'Finishing', 'Packing')");
        DB::statement("ALTER TABLE `souvenir` CHANGE `subprocess` `subprocess` ENUM('Potong Kain', 'Proses Sablon/Decal', 'Proses Jahit', 'Proses Kemas', 'Packing')");
    }
};
