<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
            $table->increments('id_commande', true);
            $table->integer('user_id');
            $table->integer('id_produit')->unsigned();
            
            $table->integer('quantity');
            $table->integer('state');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            
        });
        Schema::table('commande',function($table){
           $table->foreign('id_produit')->references('id_produit')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande');
    }
}
