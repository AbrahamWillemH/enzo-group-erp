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
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->enum('status', ['High Priority', 'Medium Priority', 'Low Priority']);
        });
        Schema::table('purchase_souvenir', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->enum('status', ['High Priority', 'Medium Priority', 'Low Priority']);
        });
        Schema::table('purchase_packaging', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->enum('status', ['High Priority', 'Medium Priority', 'Low Priority']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('status');

        });
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('status');

        });
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('status');
        });
    }
};
