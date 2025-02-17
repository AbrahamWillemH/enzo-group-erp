<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hapus primary key dahulu
        DB::statement('ALTER TABLE spk_invitation DROP PRIMARY KEY');
        DB::statement('ALTER TABLE spk_packaging DROP PRIMARY KEY');
        DB::statement('ALTER TABLE spk_souvenir DROP PRIMARY KEY');

        // Ubah tipe kolom id menjadi BIGINT auto-increment
        DB::statement('ALTER TABLE spk_invitation MODIFY id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        DB::statement('ALTER TABLE spk_packaging MODIFY id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        DB::statement('ALTER TABLE spk_souvenir MODIFY id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Kembalikan tipe id menjadi string
        DB::statement('ALTER TABLE spk_invitation MODIFY id VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE spk_packaging MODIFY id VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE spk_souvenir MODIFY id VARCHAR(255) NOT NULL');

    }
};
