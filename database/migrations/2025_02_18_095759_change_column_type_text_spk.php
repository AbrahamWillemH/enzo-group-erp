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
        Schema::table('spk_invitation', function(Blueprint $table) {
            $table->dropColumn('peruntukan');
            $table->dropColumn('nama_ukuran');
            $table->dropColumn('kebutuhan');
            $table->dropColumn('stok');
            $table->dropColumn('jumlah_beli');
            $table->dropColumn('supplier');
            $table->json('peruntukan')->nullable();
            $table->json('nama_ukuran')->nullable();
            $table->json('kebutuhan')->nullable();
            $table->json('stok')->nullable();
            $table->json('jumlah_beli')->nullable();
            $table->json('supplier')->nullable();
        });

        Schema::table('spk_packaging', function(Blueprint $table) {
            $table->dropColumn('nama_bahan');
            $table->dropColumn('ukuran');
            $table->dropColumn('kebutuhan');
            $table->dropColumn('stok');
            $table->dropColumn('jumlah_beli');
            $table->dropColumn('supplier');
            $table->json('nama_bahan')->nullable();
            $table->json('ukuran')->nullable();
            $table->json('kebutuhan')->nullable();
            $table->json('stok')->nullable();
            $table->json('jumlah_beli')->nullable();
            $table->json('supplier')->nullable();
        });

        Schema::table('spk_souvenir', function(Blueprint $table) {
            $table->dropColumn('nama_bahan');
            $table->dropColumn('kebutuhan');
            $table->dropColumn('stok');
            $table->dropColumn('jumlah_beli');
            $table->dropColumn('supplier');
            $table->json('nama_bahan')->nullable();
            $table->json('kebutuhan')->nullable();
            $table->json('stok')->nullable();
            $table->json('jumlah_beli')->nullable();
            $table->json('supplier')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spk_invitation', function(Blueprint $table) {
            $table->string('peruntukan')->nullable()->change();
            $table->string('nama_ukuran')->nullable()->change();
            $table->integer('kebutuhan')->nullable()->change();
            $table->integer('stok')->nullable()->change();
            $table->integer('jumlah_beli')->nullable()->change();
            $table->string('supplier')->nullable()->change();
        });

        Schema::table('spk_packaging', function(Blueprint $table) {
            $table->string('nama_bahan')->nullable()->change();
            $table->string('ukuran')->nullable()->change();
            $table->integer('kebutuhan')->nullable()->change();
            $table->integer('stok')->nullable()->change();
            $table->integer('jumlah_beli')->nullable()->change();
            $table->string('supplier')->nullable()->change();
        });

        Schema::table('spk_souvenir', function(Blueprint $table) {
            $table->string('nama_bahan')->nullable()->change();
            $table->integer('kebutuhan')->nullable()->change();
            $table->integer('stok')->nullable()->change();
            $table->integer('jumlah_beli')->nullable()->change();
            $table->string('supplier')->nullable()->change();
        });
    }
};