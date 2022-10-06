<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    //
    public function posts()
    {
        return $this->hasMany(Post::class,'category_id');
    }
}
