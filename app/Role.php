<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
	protected $fillable = [
		'short_name'
	];

    /*Definicion de relaciones*/
    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
