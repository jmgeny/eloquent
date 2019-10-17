<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    				//pertenece a un User
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    				//pertenece a una Category
    }

    //metodos polimorficos

    public function comments()
    {
    				//es un hasMany polimorfico 
    	return $this->morphMany(Comment::class, 'commentable');
    				//tiene muchos Comments 
    }

    public function image()
    {
    				//es un hasMany polimorfico 
    	return $this->morphOne(Image::class, 'imageable');
    				//tiene muchos Comments 
    }

    public function tags()
    {
    				
    	return $this->morphToMany(Tag::class, 'taggable');
    			//un post tiene muchas etiquetas y una etiqueta puede tener muchos post
    }	
}
