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
        Schema::table('spk_invitation', function (Blueprint $table) {
            $table->string('invitation_id')->nullable()->change();  // Menjadikan nullable
        });
        Schema::table('spk_packaging', function (Blueprint $table) {
            $table->string('packaging_id')->nullable()->change();  // Menjadikan nullable
            $table->timestamps();
        });
        Schema::table('spk_souvenir', function (Blueprint $table) {
            $table->string('souvenir_id')->nullable()->change();  // Menjadikan nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spk_invitation', function (Blueprint $table) {
            $table->string('invitation_id')->nullable(false)->change();  // Mengembalikan ke semula
        });
        Schema::table('spk_packaging', function (Blueprint $table) {
            $table->string('packaging_id')->nullable(false)->change();  // Mengembalikan ke semula
            $table->dropTimestamps();
        });
        Schema::table('spk_souvenir', function (Blueprint $table) {
            $table->string('souvenir_id')->nullable(false)->change();  // Mengembalikan ke semula
            $table->dropTimestamps();
        });
    }
};
