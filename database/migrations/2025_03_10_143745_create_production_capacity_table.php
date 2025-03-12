<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('production_capacity', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('jahit')->nullable();
            $table->integer('kemas_plastik')->nullable();
            $table->integer('kemas_box')->nullable();
            $table->integer('kemas_mika')->nullable();
            $table->integer('kemas_besek')->nullable();
            $table->integer('kemas_krongso')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_capacity');
    }
};
