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
        Schema::table('invitation_changes', function (Blueprint $table) {
            $table->string('changer_name');
        });
        Schema::table('souvenir_changes', function (Blueprint $table) {
            $table->string('changer_name');
        });
        Schema::table('packaging_changes', function (Blueprint $table) {
            $table->string('changer_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation_changes', function (Blueprint $table) {
            $table->dropColumn('changer_name');
        });
        Schema::table('souvenir_changes', function (Blueprint $table) {
            $table->dropColumn('changer_name');
        });
        Schema::table('packaging_changes', function (Blueprint $table) {
            $table->dropColumn('changer_name');
        });
    }
};
