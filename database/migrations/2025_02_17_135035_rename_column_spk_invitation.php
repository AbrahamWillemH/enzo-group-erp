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
        Schema::table('spk_invitation', function (Blueprint $table) {
            $table->renameColumn('gulungan', 'gunungan');
            $table->string('lain_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spk_invitation', function (Blueprint $table) {
            $table->renameColumn('gunungan', 'gulungan');
            $table->dropColumn('lain_lain');
            $table->dropTimestamps();
        });
    }
};
