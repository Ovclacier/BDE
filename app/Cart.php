<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'datas',
        'id_user',
     ];
}
