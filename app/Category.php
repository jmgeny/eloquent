<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts() {

        return $this->hasMany(Post::class);
    				//tiene muchos Post
    }

    public function videos() {

        return $this->hasMany(Video::class);
    				//tiene muchos Videos
    }		
}
