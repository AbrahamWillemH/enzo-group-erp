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
            $table->integer('price_per_pcs')->default('5000')->after('dp_date');
            $table->string('printout')->default('Printilan')->after('price_per_pcs');
            $table->string('expedition')->default('SiCepat')->after('printout');
            $table->boolean('acc_client')->default(true)->after('printout');
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
