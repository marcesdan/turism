<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuristaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turista', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('idioma');
            $table->unsignedSmallInteger('dias');
            $table->string('mes');
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
        Schema::dropIfExists('turista');
    }
}
