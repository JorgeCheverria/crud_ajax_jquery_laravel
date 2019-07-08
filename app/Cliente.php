<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'id','name', 'last_name', 'cedula','email','telefono',
    ];
}
