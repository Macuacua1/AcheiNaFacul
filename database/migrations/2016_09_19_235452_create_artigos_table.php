<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('artigo_id');
            $table->string('titulo');
            $table->string('designacao');
            $table->string('descricao');
            $table->date('data');
            $table->string('foto');
            $table->string('tipo');
            $table->string('local');
            $table->string('descricao_local');
//            $table->bigInteger('user_id_fk')->unsigned();
//            $table->foreign('user_id_fk')->references('id')->on('users')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//            $table->bigInteger('receptor_id_fk')->unsigned();
//            $table->foreign('receptor_id_fk')->references('receptor_id')->on('receptors')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
