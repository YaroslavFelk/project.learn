<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $guarded = [];

    public function getRouteKeyName()
    {
        return 'tag';
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
