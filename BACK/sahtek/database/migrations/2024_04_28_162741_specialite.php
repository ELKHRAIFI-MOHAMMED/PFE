<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Specialite extends Migration
{
    public function up()
    {
        Schema::create('specialite', function (Blueprint $table) {
            $table->id('id_specialite');
            $table->string('nom');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialite');
    }
}
