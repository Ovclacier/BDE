<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    	'id_event',
        'title',
        'description',
        'author',
        'state',
        'date_event',
        'recurence',	//0 = non-récurent, 1 = journalier, 2 = hebdomadaire, 3 = une fois toute les deux semaines, 4 = mensuel, 5 = tous les deux mois, 6 = trimestriel, 					7 = annuel
     ];

}
