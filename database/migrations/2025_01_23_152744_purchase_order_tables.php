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

        Schema::create('purchase_invitation', function (Blueprint $table) {
            $table->string('order_code')->primary();
            $table->string('invoice')->nullable();
            $table->date('date')->nullable();
            $table->string('supplier')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('product')->nullable();
            $table->string('size_type')->nullable();
            $table->integer('quantity_per_type')->nullable();
            $table->date('termin')->nullable();
            $table->integer('total')->nullable();
            $table->string('unit')->nullable();
            $table->string('pic')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->string('send')->nullable();
            $table->boolean('bought')->nullable();
            $table->boolean('paid')->nullable();
        });
        Schema::create('purchase_souvenir', function (Blueprint $table) {
            $table->string('order_code')->primary();
            $table->string('invoice')->nullable();
            $table->date('date')->nullable();
            $table->string('supplier')->nullable();
            $table->string('product')->nullable();
            $table->string('motif')->nullable();
            $table->integer('quantity_per_motif')->nullable();
            $table->integer('stock')->nullable();
            $table->string('address')->nullable();
            $table->date('termin')->nullable();
            $table->integer('purchase_amount')->nullable();
            $table->string('unit')->nullable();
            $table->integer('price_per_pcs')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('pic')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->boolean('bought')->nullable();
            $table->boolean('paid')->nullable();

        });
        Schema::create('purchase_packaging', function (Blueprint $table) {
            $table->string('order_code')->primary();
            $table->string('invoice')->nullable();
            $table->date('date')->nullable();
            $table->string('supplier')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('product')->nullable();
            $table->string('size_per_motif')->nullable();
            $table->date('termin')->nullable();
            $table->integer('stock')->nullable();
            $table->string('unit')->nullable();
            $table->integer('price_per_pcs')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('pic')->nullable();
            $table->string('customer')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->string('send')->nullable();
            $table->boolean('done')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_invitation');
        Schema::dropIfExists('purchase_souvenir');
        Schema::dropIfExists('purchase_packaging');
    }
};
