<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->binary('icon')->default('');
            $table->unsignedInteger('set_id');
            $table->boolean('requires_madness')->default(false);
            $table->boolean('requires_monsters')->default(false);
            $table->boolean('requires_treasure')->default(false);
            $table->foreign('set_id')->references('id')->on('sets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factions');
    }
}
