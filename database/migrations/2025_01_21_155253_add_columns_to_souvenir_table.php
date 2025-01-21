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
            $table->string('address');
            $table->string('phone_number');
            $table->date('event_date');
            $table->string('bridegroom_name');
            $table->string('pack');
            $table->string('design');
            $table->string('thankscard');
            $table->string('color_motif');
            $table->string('motif_backup');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'phone_number',
                'event_date',
                'bridegroom_name',
                'pack',
                'design',
                'thankscard',
                'color_motif',
                'motif_backup',
                'deadline_date',
                'warna_motif',
                'motif_cadangan',
            ]);
        });
    }
};
