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
            $table->enum('design_status',['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('note_design')->nullable();
            $table->string('note_cs')->nullable();
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->enum('design_status',['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('note_design')->nullable();
            $table->string('note_cs')->nullable();
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->enum('design_status', ['Pending', 'DECL', 'ACC'])->default('Pending');
            $table->string('note_cs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitation', function (Blueprint $table) {
            $table->dropColumn('design_status');
            $table->dropColumn('note_design');
            $table->dropColumn('note_cs');
        });
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn('design_status');
            $table->dropColumn('note_design');
            $table->dropColumn('note_cs');
        });
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn('design_status');
            $table->dropColumn('note_cs');
        });
    }
};
