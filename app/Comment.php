<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_image',
        'id_user',
        'commentaire',
        'react',
     ];
     public function getSomeDatas()
     {
        return $this->id_user;
     }
    
}
