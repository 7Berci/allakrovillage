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
        Schema::create('informations_communautaires', function (Blueprint $table) {
            $table->id('id_information_communautaire');
            $table->string('nom');
            $table->string('description');
            $table->date('date_creation');
            $table->string('site_web');
            $table->string('objectif');
            $table->unsignedBigInteger('id_acteur'); // Si vous avez une relation avec le modèle Acteur
            $table->foreign('id_acteur')->references('id_acteur')->on('acteurs')->onDelete('cascade');            $table->text('evenement');
            $table->string('statut');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations_communautaires');
    }
};
