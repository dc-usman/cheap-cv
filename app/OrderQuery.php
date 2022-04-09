<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderQuery extends Model
{
    public $timestamps=false;
    // public $table = 'order_queries';

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    //     'deleted_at',
    // ];

        protected $fillable = [
            'id',
            'entry',
            'resume',
            'days',
        ];
}
