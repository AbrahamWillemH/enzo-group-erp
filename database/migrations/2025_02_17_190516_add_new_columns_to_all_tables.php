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
            $table->string('size_fix')->nullable();
            $table->date('fix_design_date')->nullable();
            $table->string('percetakan')->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('size_fix')->nullable();
            $table->date('fix_design_date')->nullable();
            $table->string('percetakan')->nullable();
            $table->string('kemas')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('size_fix')->nullable();
            $table->date('fix_design_date')->nullable();
            $table->string('percetakan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('size_fix');
            $table->dropColumn('fix_design_date');
            $table->dropColumn('percetakan');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('size_fix');
            $table->dropColumn('fix_design_date');
            $table->dropColumn('percetakan');
            $table->dropColumn('kemas');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('size_fix');
            $table->dropColumn('fix_design_date');
            $table->dropColumn('percetakan');
        });
    }
};
