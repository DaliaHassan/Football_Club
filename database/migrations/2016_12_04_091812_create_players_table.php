<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->date('birthDate');
            $table->string('favoriteFoot');
            $table->binary('profilePhoto');
            $table->integer('clubID')->unsigned();
            $table->foreign('clubID')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('teamID')->unsigned();
            $table->foreign('teamID')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::drop('players');
    }
}
