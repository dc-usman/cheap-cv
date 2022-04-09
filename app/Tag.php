<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tags');
    }

}
