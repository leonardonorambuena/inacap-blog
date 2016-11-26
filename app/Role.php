<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /*Relaciones*/
    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
