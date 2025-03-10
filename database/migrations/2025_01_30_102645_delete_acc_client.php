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
            $table->dropColumn('acc_client');
        });

        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('acc_client');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('acc_client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->string('acc_client');
        });

        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('acc_client');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('acc_client');
        });
    }
};
