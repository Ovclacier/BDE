<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class reacts extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_image',
        'id_user',
        'commentaire',
        'liked',
     ];
}
