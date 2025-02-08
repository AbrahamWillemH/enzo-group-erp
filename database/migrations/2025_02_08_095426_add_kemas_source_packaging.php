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
        Schema::table('packaging', function (Blueprint $table) {
            $table->enum('kemas', ['Bubble 1-1', 'Bubble 1-1 + Bubble Luar', 'Bubble Luar', 'Tanpa Bubble']);
            $table->enum('source',['Shopee', 'Deonkraft', 'Enzo Wedding', 'Grizelle']);
        });

        DB::statement("ALTER TABLE `packaging` CHANGE `package_type` `package_type` VARCHAR(50)");
        
        DB::statement("ALTER TABLE `packaging` CHANGE `finishing` `finishing` VARCHAR(50)");
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packaging', function(Blueprint $table) {
            $table->dropColumn('kemas');
            $table->dropColumn('source');
        });

        DB::statement("ALTER TABLE `packaging` CHANGE `package_type` `package_type` ENUM('SB Diecut', 'CB Diecut', 'HB Tutup Lepas', 'HB Pita', 'HB Magnet')");

        DB::statement("ALTER TABLE `packaging` CHANGE `finishing` `finishing` ENUM('Foil', 'Laminasi Doff')");

    }
};
