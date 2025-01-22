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
            $table->string('printout')->nullable();
            $table->enum('acc_client', ['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('expedition')->nullable();
            $table->integer('price_per_pcs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('invitation', 'price_per_pcs')) {
            Schema::table('invitation', function (Blueprint $table) {
                $table->dropColumn('price_per_pcs');
            });
        }

        if (Schema::hasColumn('invitation', 'printout')) {
            Schema::table('invitation', function (Blueprint $table) {
                $table->dropColumn('printout');
            });
        }

        if (Schema::hasColumn('invitation', 'expedition')) {
            Schema::table('invitation', function (Blueprint $table) {
                $table->dropColumn('expedition');
            });
        }

        if (Schema::hasColumn('invitation', 'acc_client')) {
            Schema::table('invitation', function (Blueprint $table) {
                $table->dropColumn('acc_client');
            });
        }
    }
};
