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
        Schema::table('invitation', function (Blueprint $table) {
            $table->enum('time_zone',['WIB', 'WIT', 'WITA'])->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->enum('time_zone',['WIB', 'WIT', 'WITA'])->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->enum('time_zone',['WIB', 'WIT', 'WITA'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('time_zone');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('time_zone');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('time_zone');
        });
    }
};
