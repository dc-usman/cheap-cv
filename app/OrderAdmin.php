<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAdmin extends Model
{
    //
    public $timestamps=false;

    protected $fillable=[
        'entry', 
    ];
}
