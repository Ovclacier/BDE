<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_produit',
        'user_id',
        'quantity',
        'state',
     ];
}
