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
            $table->dropColumn([
                'payment_status',
                'dp_date',
            ]);
            $table->enum('payment_status', ['Pending', 'DP 1', 'DP 2', 'Lunas'])->default('Pending');
            $table->date('dp1_date')->nullable();
            $table->date('dp2_date')->nullable();
            $table->date('paid_off_date')->nullable();
        });

        Schema::table('souvenir', function (Blueprint $table) {
            $table->enum('payment_status', ['Pending', 'DP 1', 'DP 2', 'Lunas'])->default('Pending');
            $table->date('dp1_date')->nullable();
            $table->date('dp2_date')->nullable();
            $table->date('paid_off_date')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->enum('payment_status', ['Pending', 'DP 1', 'DP 2', 'Lunas'])->default('Pending');
            $table->date('dp1_date')->nullable();
            $table->date('dp2_date')->nullable();
            $table->date('paid_off_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn([
                'payment_status',
                'dp1_date',
                'dp2_date',
            ]);

            $table->string('payment_status');
            $table->date('dp_date');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn([
                'payment_status',
                'dp1_date',
                'dp2_date',
            ]);

            $table->string('payment_status');
            $table->date('dp_date');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn([
                'payment_status',
                'dp1_date',
                'dp2_date',
            ]);

            $table->string('payment_status');
            $table->date('dp_date');
        });
    }
};
