<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function profile() {
        
        return $this->hasOne(Profile::class);
        //tengo un Profile
    }  

    public function level() {

        return $this->belongsTo(Level::class);
        //pertenezco a un Level

    }

    public function groups() {

        return $this->belongsToMany(Group::class)->withTimestamps();
        // pertenezco a muchos Group y el Goup tiene muchos User
    } 

    public function location() {
        
        return $this->hasOneThrough(Location::class, Profile::class);
        // tengo una Location a traves de Profile
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    } 

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function image()
    {
                    //es un hasMany polimorfico 
        return $this->morphOne(Image::class, 'imageable');
                    //tiene muchos Comments 
    }  
}
