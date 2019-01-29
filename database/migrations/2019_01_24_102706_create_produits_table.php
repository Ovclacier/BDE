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
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id_produit', true);
            $table->string('Nom_article');
            $table->longText('description');
            $table->float('prix');
            $table->integer('id_categorie')->unsigned();
            $table->integer('id_image')->unsigned();
            $table->timestamp('deleted_at')->nullable();
        });
        
         Schema::table('produits',function($table){
            $table->foreign('id_image')->references('id_image')->on('images');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories');
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
