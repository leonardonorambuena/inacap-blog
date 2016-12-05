<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use SoftDeletes, Sluggable;

    protected $fillable = [
    	'title', 'image', 'body', 'user_id'
    ];

    protected $dates = [
    	'deleted_at'
    ];

    /*para buscar por el slug con model binding*/

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*Mutadores*/

    public function setImageAttribute($image)
    {
    	$name = time().$image->getClientOriginalName();
    	$this->attributes['image'] = $name;
    	\Storage::disk('cover')->put($name, \File::get($image));
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = ucfirst($value);
    }

    public function setBodyAttribute($value)
    {
    	$this->attributes['body'] = ucfirst($value);
    }
    /*Comprobar si existe el archivo en el servidor*/
    public function DocumentExist()
    {
    	return \File::exists(public_path('images/cover/').$this->image);
    }
    /*Asignamos url a la imagen*/
    public function getImagePathAttribute()
    {
    	if($this->DocumentExist())
    	{
    		return '/images/cover/'. $this->image;
    	}

    	return '/images/cover/noimage.jpg';
    	
    }

    public function getCommentTextAttribute()
    {
        $count = $this->comments()->count();
        if($count === 0)
        {
            return 'Sin Comentarios';
        }else if($count == 1)
        {
            return '1 Comentario';
        }else{
            return $count. ' Comentarios';
        }

    }


    /*Relaciones*/
    public function editor()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


      /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
