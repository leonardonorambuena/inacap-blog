<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'name', 'description'
    ];


    /*Scopes*/

    public function scopeName($query, $name)
    {
    	$query->where('name', 'LIKE', "%$name%");
    }


    /*relaciones */

    public function posts()
    {
    	return $this->belongsToMany(Post::class);
    }
}
