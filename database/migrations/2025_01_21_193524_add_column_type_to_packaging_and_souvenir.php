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
            $table->string('type')->default('packaging');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('type')->default('souvenir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('type');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
