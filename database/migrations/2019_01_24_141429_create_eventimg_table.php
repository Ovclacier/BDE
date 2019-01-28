<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventimg', function (Blueprint $table) {
            $table->integer('id_event')->unsigned();
            $table->integer('id_image')->unsigned();
            $table->foreign('id_event')->references('id_event')->on('events');
            $table->foreign('id_image')->references('id_image')->on('images');
            $table->integer('etat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventimg');
    }
}
