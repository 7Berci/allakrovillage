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
        Schema::create('evenement_vies', function (Blueprint $table) {
            $table->id('id_evenement_vie');
            $table->string('type');
            $table->string('description');
            $table->date('Date');
            $table->string('lieu');
            $table->string('statut');
            $table->unsignedBigInteger('id_acteur'); // Si vous avez une relation avec le modèle Acteur
            $table->foreign('id_acteur')->references('id')->on('acteurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_vie');
    }
};
