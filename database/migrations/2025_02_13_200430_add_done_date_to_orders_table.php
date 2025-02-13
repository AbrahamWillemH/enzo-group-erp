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
            $table->date('done_at')->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->date('done_at')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->date('done_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('done_at');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('done_at');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('done_at');
        });
    }
};
