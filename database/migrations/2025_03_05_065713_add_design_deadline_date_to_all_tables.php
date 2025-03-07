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
            $table->string('design_deadline_date')->nullable();
        });
        Schema::table('invitation', function (Blueprint $table) {
            $table->string('design_deadline_date')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('design_deadline_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('design_deadline_date');
        });
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('design_deadline_date');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('design_deadline_date');
        });
    }
};
