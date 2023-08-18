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
        Schema::create('artisanales', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->integer('prix');
            $table->string('categorie');
            $table->string('collection');
            $table->string('etat');
            $table->string('photo');
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
        Schema::dropIfExists('artisanales');
    }
};
