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
            $table->dropColumn('desain_path');
            $table->string('desain_emboss_path')->nullable();
            $table->string('desain_thankscard_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('souvenir', function (Blueprint $table) {
            $table->string('desain_path');
            $table->dropColumn('desain_emboss_path');
            $table->dropColumn('desain_thankscard_path');
        });
    }
};
