<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
