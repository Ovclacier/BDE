<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'categorie',
     ];
}
