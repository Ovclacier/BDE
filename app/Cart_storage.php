<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart_storage extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'cart_data',
     ];

}
