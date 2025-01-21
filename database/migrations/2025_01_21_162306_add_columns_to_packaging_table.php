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
        Schema::table('packaging', function (Blueprint $table) {
            $table->string('address');
            $table->string('phone_number');
            $table->enum('model', ['Softbox', 'Corrugatedbox', 'Hardbox'])->nullable();
            $table->enum('type', ['SB Diecut', 'CB Diecut', 'HB Tutup Lepas', 'HB Pita', 'HB Magnet'])->nullable();
            $table->enum('finishing', ['Foil', 'Laminasi Doff'])->nullable();
            $table->string('size');
            $table->string('note_design')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packaging', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'phone_number',
                'model',
                'type',
                'finishing',
                'size',
                'note_design',
            ]);
        });
    }
};
