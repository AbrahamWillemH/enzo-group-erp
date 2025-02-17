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
        Schema::create('spk_invitation', function(Blueprint $table) {
            $table->string('id')->primary();
            $table->string('invitation_id');  // Foreign key ke tabel invitation
            $table->string('foil')->nullable();
            $table->string('kertas_foil')->nullable();
            $table->string('laminasi')->nullable();
            $table->string('kartu')->nullable();
            $table->string('label_nama')->nullable();
            $table->string('plastik')->nullable();
            $table->string('gulungan')->nullable();
            $table->string('tussel')->nullable();
            $table->string('pita')->nullable();
            $table->string('tali_rami')->nullable();
            $table->string('waxseal')->nullable();
            $table->string('kalkir')->nullable();
            $table->string('kain_goni')->nullable();
            $table->string('ornamen')->nullable();
            $table->string('note_tambahan')->nullable();
            $table->string('peruntukan')->nullable();
            $table->string('nama_ukuran')->nullable();
            $table->integer('kebutuhan')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('jumlah_beli')->nullable();
            $table->string('supplier')->nullable();

            $table->foreign('invitation_id')
            ->references('id')
            ->on('invitation')
            ->onDelete('cascade');
        });

        Schema::create('spk_packaging', function(Blueprint $table) {
            $table->string('id')->primary();
            $table->string('packaging_id');  // Foreign key ke tabel packaging
            $table->string('foil')->nullable();
            $table->string('kertas_foil')->nullable();
            $table->string('laminasi')->nullable();
            $table->string('pita')->nullable();
            $table->string('attire_thankscard')->nullable();
            $table->string('embos')->nullable();
            $table->string('tali')->nullable();
            $table->string('warna_tali')->nullable();
            $table->string('brosur')->nullable();
            $table->string('ornamen')->nullable();
            $table->string('lain_lain')->nullable();
            $table->string('sekat')->nullable();
            $table->string('note_tambahan')->nullable();
            $table->string('nama_bahan')->nullable();
            $table->string('ukuran')->nullable();
            $table->integer('kebutuhan')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('jumlah_beli')->nullable();
            $table->string('supplier')->nullable();

            $table->foreign('packaging_id')
                  ->references('id')
                  ->on('packaging')
                  ->onDelete('cascade');
        });

        Schema::create('spk_souvenir', function(Blueprint $table) {
            $table->string('id')->primary();
            $table->string('souvenir_id');  // Foreign key ke tabel souvenir
            $table->string('motif')->nullable();
            $table->string('ukuran_kain')->nullable();
            $table->string('tali')->nullable();
            $table->string('zipper')->nullable();
            $table->string('kepala_zipper')->nullable();
            $table->string('lain_lain')->nullable();
            $table->string('jenis_kertas')->nullable();
            $table->string('ukuran_kertas')->nullable();
            $table->string('ukuran_mika')->nullable();
            $table->string('pita')->nullable();
            $table->string('model_pita')->nullable();
            $table->string('note_tambahan')->nullable();
            $table->string('nama_bahan')->nullable();
            $table->integer('kebutuhan')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('jumlah_beli')->nullable();
            $table->string('supplier')->nullable();

            $table->foreign('souvenir_id')
            ->references('id')
            ->on('souvenir')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spk_invitation');
        Schema::dropIfExists('spk_packaging');
        Schema::dropIfExists('spk_souvenir');
    }
};
