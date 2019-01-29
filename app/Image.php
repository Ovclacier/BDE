<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_auteur',
        'url_image',
        'id_event'
     ];
    
}
