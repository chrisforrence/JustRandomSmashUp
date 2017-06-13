<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersFactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_factions', function (Blueprint $table) {

            $table->bigInteger('player_id')->unsigned();
            $table->unsignedInteger('faction_id');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('faction_id')->references('id')->on('factions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_factions');
    }
}
