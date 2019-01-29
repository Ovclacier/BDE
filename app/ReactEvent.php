<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ReactEvent extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_event',
        'id_user',
        'inscrit',
        'liked',
     ];
}
