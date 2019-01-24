<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectcomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectcom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_commande')->unsigned();
            $table->integer('id_produit')->unsigned();
            $table->foreign('id_commande')->references('id_commande')->on('commande');
            $table->foreign('id_produit')->references('id_produit')->on('produits');
            $table->integer('quantite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectcom');
    }
}
