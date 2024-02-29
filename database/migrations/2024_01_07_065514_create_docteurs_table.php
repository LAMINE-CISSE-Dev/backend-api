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
        Schema::create('docteurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->string('location');
            $table->string('imageUrl');
            $table->json('hours')->nullable(); // Heures de rendez-vous disponibles
            $table->json('days')->nullable();
            $table->json('heures_travail')->nullable();
            $table->json('jours_travail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docteurs');
    }
};
