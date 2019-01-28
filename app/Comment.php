<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_post',
        'id_user',
        'commentaire',
        'image',
     ];
    
}
