<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactEvents', function (Blueprint $table) {
            $table->increments('id_reactEvent', true);
            $table->integer('id_event')->unsigned();
            
            $table->integer('inscrit');
            $table->integer('liked');
            $table->integer('id_user');
        });
        Schema::table('reactEvents',function($table){
           $table->foreign('id_event')->references('id_event')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscrits');
    }
}
