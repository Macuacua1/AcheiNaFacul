<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
//        Schema::create('users', function (Blueprint $table) {
////            $table->increments('id');
//            $table->bigInteger('user_id');
//            $table->primary('user_id');
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->string('password');
//            $table->foreign('user_id')->references('nr_utente')->on('utentes')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//            $table->rememberToken();
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
        Schema::drop('users');
    }
}
