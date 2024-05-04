<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartiesCorp extends Migration
{
    public function up()
    {
        Schema::create('parties_corp', function (Blueprint $table) {
            $table->id('id_parties_corps');
            $table->string('nom');
            $table->string('description');
            $table->string('photo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parties_corp');
    }
}

