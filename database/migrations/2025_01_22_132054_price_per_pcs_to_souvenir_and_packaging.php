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
            $table->integer('price_per_pcs')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->integer('price_per_pcs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('price_per_pcs');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('price_per_pcs');
        });
    }
};
