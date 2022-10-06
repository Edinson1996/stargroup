<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=[
        'title',
        'description',
        'body',
        'idea',
        'image',
        'video',
        'category_id',
        'slug',
        'archivo',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPost::class);
    }
}
