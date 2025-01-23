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
        Schema::table('purchase_souvenir', function (Blueprint $table) {
            $table->char('souvenir_id', 36);
            $table->foreign('souvenir_id')->references('id')->on('souvenir')->onDelete('cascade');
        });
        Schema::table('purchase_packaging', function (Blueprint $table) {
            $table->char('packaging_id', 36);
            $table->foreign('packaging_id')->references('id')->on('packaging')->onDelete('cascade');
        });
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->char('invitation_id', 36);
            $table->foreign('invitation_id')->references('id')->on('invitation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_invitation', function (Blueprint $table) {
            $table->dropForeign(['invitation_id']);
            $table->dropColumn('invitation_id');
        });
        Schema::table('purchase_souvenir', function (Blueprint $table) {
            $table->dropForeign(['souvenir_id']);
            $table->dropColumn('souvenir_id');
        });
        Schema::table('purchase_packaging', function (Blueprint $table) {
            $table->dropForeign(['packaging_id']);
            $table->dropColumn('packaging_id');
        });
    }
};
