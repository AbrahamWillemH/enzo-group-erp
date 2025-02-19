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
        Schema::create('invitation_changes', function (Blueprint $table) {
            $table->id();
            $table->string('invitation_id');
            $table->foreign('invitation_id')->references('id')->on('invitation')->onDelete('cascade');
            $table->string('column_name');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamps();
        });

        Schema::create('souvenir_changes', function (Blueprint $table) {
            $table->id();
            $table->string('souvenir_id');
            $table->foreign('souvenir_id')->references('id')->on('souvenir')->onDelete('cascade');
            $table->string('column_name');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamps();
        });

        Schema::create('packaging_changes', function (Blueprint $table) {
            $table->id();
            $table->string('packaging_id');
            $table->foreign('packaging_id')->references('id')->on('packaging')->onDelete('cascade');
            $table->string('column_name');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation_changes');
        Schema::dropIfExists('souvenir_changes');
        Schema::dropIfExists('packaging_changes');
    }
};
