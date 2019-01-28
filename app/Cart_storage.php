<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart_storage extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'cart_data',
        'user_id',
     ];
}
