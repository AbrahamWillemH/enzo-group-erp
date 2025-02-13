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
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('size');
        });

        DB::statement("ALTER TABLE `packaging` CHANGE `finishing` `finishing` TEXT");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('size');
        });

        DB::statement("ALTER TABLE `packaging` CHANGE `finishing` `finishing` VARCHAR(50)");
    }
};
