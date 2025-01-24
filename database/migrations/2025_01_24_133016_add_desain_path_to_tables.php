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
            $table->string('desain_path')->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('desain_path')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('desain_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('desain_path');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('desain_path');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('desain_path');
        });
    }
};
