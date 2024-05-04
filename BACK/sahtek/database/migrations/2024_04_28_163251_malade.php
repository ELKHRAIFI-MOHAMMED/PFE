<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Malade extends Migration
{
    public function up()
    {
        Schema::create('malade', function (Blueprint $table) {
            $table->id('id_malade');
            $table->string('nom');
            $table->text('description');
            $table->bigInteger('id_parties_corps')->unsigned();
            $table->foreign('id_parties_corps')->references('id_parties_corps')->on('parties_corp');
            $table->bigInteger('id_genre')->unsigned()->default(null);
            $table->foreign('id_genre')->references('id_genre')->on('genre');
            $table->bigInteger('id_specialite')->unsigned();
            $table->foreign('id_specialite')->references('id_specialite')->on('specialite');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('malade');
    }
}
