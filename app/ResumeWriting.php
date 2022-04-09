<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeWriting extends Model
{
    public $timestamps=false;

    protected $fillable=[
        'resume', 
    ];
}
