<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMayoristaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mayorista_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('password');
            $table->string('referente')->nullable();
            $table->json('telefonos')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('mayorista_user');
    }
}
