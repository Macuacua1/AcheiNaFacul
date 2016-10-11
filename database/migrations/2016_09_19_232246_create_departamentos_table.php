<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('departamento_id');
            $table->string('designacao');
            $table->string('abreviatura');
            $table->integer('faculdade_id')->unsigned();
            $table->foreign('faculdade_id')->references('faculdade_id')->on('faculdades')
                ->onUpdate('cascade')
                ->onDelete('cascade');

//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
