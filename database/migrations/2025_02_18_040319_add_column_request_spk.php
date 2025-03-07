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
            $table->string('request')->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('request')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('request')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('request');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('request');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('request');
        });
    }
};
