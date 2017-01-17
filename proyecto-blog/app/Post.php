<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'article',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
