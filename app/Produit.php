<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;



class Produit extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'Nom_article',
        'description',
        'prix',
        'id_categorie',
        'URL_image',
     ];

}
