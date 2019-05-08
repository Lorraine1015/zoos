<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_number');
            $table->string('genre');
            $table->string('birth_year');
            $table->string('country');
            $table->string('continent');
            $table->unsignedBigInteger('species_id');
            $table->foreign('species_id')->references('id')->on('species');//Llave foranea,referencia,de la tabla..
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
