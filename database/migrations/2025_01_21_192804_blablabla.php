<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packaging', function (Blueprint $table) {
            // Ubah nama kolom 'type' menjadi 'package_type'
            $table->renameColumn('type', 'package_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packaging', function (Blueprint $table) {
            // Kembalikan nama kolom 'package_type' menjadi 'type'
            $table->renameColumn('package_type', 'type');
        });
    }
};
