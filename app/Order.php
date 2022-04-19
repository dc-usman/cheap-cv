<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'name',
        "email",
        'phone',
        'carrer_level',
        "select_service",
        "deadline_id",
        "total_price",
        "detail",
        "is_complete",

    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function carrer_level()
    {
        return $this->belongsTo(CarrerLevelModel::class, 'carrer_level','id' );
    }

     public function selectService()
     {
         return $this->belongsTo(SelectServices::class,'select_service','id');
     }

    public function dayModel()
    {
        return $this->belongsTo(DayModel::class,'deadline_id', 'id');
    }
}
