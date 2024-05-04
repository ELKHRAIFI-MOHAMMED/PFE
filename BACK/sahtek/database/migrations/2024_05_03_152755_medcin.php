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
         Schema::create('medcin', function (Blueprint $table) {
            $table->id('id_medcin');
            $table->text('nom_prenom');
            $table->text('bio');
            $table->text('ville');
            $table->bigInteger('id_specialite')->unsigned();
            $table->foreign('id_specialite')->references('id_specialite')->on('specialite');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medcin');
    }
};
