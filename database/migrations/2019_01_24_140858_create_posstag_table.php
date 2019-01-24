<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosstagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posstag', function (Blueprint $table) {
            $table->integer('id_tag')->unsigned();
            $table->integer('id_prod')->unsigned();
            $table->foreign('id_tag')->references('id_tag')->on('tags');
            $table->foreign('id_prod')->references('id_produit')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posstag');
    }
}
