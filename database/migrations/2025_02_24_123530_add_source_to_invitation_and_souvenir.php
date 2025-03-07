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
            $table->enum('source', ['Shopee', 'Deonkraft', 'Enzo Wedding', 'Grizelle'])->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->enum('source', ['Shopee', 'Deonkraft', 'Enzo Wedding', 'Grizelle'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('source');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('source');
        });
    }
};
