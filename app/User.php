<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'first_name', 'last_name', 'section', 'phone','role_id', 'email', 'password',
        'facebook_url', 'twiter_url', 'linkedin_url', 'avatar', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function isDeleted()
    {
        if($this->deleted_at != null)
        {
            return true;
        }
    }

    public function avatarExist()
    {
        return \File::exists(public_path('images/avatar/').$this->avatar);
    }

    public function getAvatarPathAttribute()
    {
        if($this->avatar != null && $this->avatarExist())
        {
            return '/images/avatar/' . $this->avatar;
        }
        return '/images/avatar/user.png';

    }

    /* Mutadores */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setUserNameAttribute($value)
    {
        $this->attributes['user_name'] = strtolower($value);
    } 

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords(strtolower($value));
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucwords(strtolower($value));
    }   




    /*Relaciones*/

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    /* scopes para filtros */

    public function scopeUserName($query, $userName)
    {
        if(trim($userName) != "")
        {
            $query->where('user_name', 'LIKE', "%$userName%");
        }
    }

    public function scopeFirstName($query, $firstName)
    {
        if(trim($firstName) != "")
        {
            $query->where('first_name','LIKE', "%$firstName%");
        }
    }

    public function scopeLastName($query, $lastName)
    {
        if(trim($lastName) != "")
        {
            $query->where('last_name','LIKE', "%$lastName%");
        }
    }

    public function scopeRole($query, $role)
    {
        if(trim($role) != "" && is_numeric($role))
        {
            $query->where('role_id', $role);
        }   
    }


}
