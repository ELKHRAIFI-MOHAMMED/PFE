<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consigne extends Migration
{
    public function up()
    {
        Schema::create('consigne', function (Blueprint $table) {
            $table->id('id_consigne');
            $table->text('description');
            $table->bigInteger('id_malade')->unsigned();
            $table->foreign('id_malade')->references('id_malade')->on('malade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consigne');
    }
}

