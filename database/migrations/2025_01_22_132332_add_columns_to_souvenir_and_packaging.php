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
            $table->string('printout')->nullable();
            $table->enum('acc_client', ['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('expedition')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('printout')->nullable();
            $table->enum('acc_client', ['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('expedition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('printout');
            $table->dropColumn('acc_client');
            $table->dropColumn('expedition');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('printout');
            $table->dropColumn('acc_client');
            $table->dropColumn('expedition');
        });
    }
};
