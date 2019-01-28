<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Login extends Model implements Authenticatable
{
    protected $connection = 'mysql2';
    use BasicAuthenticatable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
