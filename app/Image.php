<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_post',
        'id_author',
        'image',
        'id_event'
     ];
    
}
