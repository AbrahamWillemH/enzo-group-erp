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
        Schema::table('invitation', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
        Schema::table('souvenir', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
        Schema::table('packaging', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
        Schema::table('souvenir', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
        Schema::table('packaging', function(Blueprint $table) {
            $table->text('reception_time_done')->nullable();
            $table->text('akad_pemberkatan_time_done')->nullable();
        });
    }
};
