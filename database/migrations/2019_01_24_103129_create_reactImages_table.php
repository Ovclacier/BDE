<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactImages', function (Blueprint $table) {
            $table->increments('id_reactImage', true);
            $table->integer('id_image')->unsigned();
            
            $table->longText('commentaire');
            $table->integer('liked');
            $table->integer('id_user');
        });
         Schema::table('reactImages',function($table){
           $table->foreign('id_image')->references('id_image')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reacts');
    }
}
