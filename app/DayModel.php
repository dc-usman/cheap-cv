<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayModel extends Model
{
    public $timestamps=false;

    protected $fillable=[
        'id',
        'name', 
    ];
}
