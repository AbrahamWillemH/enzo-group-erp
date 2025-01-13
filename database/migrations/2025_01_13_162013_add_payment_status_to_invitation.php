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
            $table->string('payment_status')->default('Pending')->after('quantity');
            //INI TANYAIN DULU SAMA PAK ENDRA MAU DIBIKIN BOLEH LANGSUNG BIKIN ORDER TANPA DP ATAU HARUS DP DULU BARU BISA
            $table->date('dp_date')->after('payment_status')->default(DB::raw('CURRENT_DATE'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('payment_status');
            $table->dropColumn('dp_date');
        });
    }
};
