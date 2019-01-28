<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('produits', function (Blueprint $table) {
            $table->increments('id_produit');
            $table->char('Nom_article');
            $table->char('description');
            $table->double('prix', 2, 2);
            $table->integer('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id_categorie')->on('categories');
            $table->char('URL_image');
            $table->date('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
