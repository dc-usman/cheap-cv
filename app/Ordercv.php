<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercv extends Model
{
    public $table = 'ordercvs';

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
        "carrer_level_name",
        "select_service_name",
        "deadline_name",
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
        return $this->belongsTo(CarrerLevelModel::class, "carrer_level_name");
    }

    public function select_service()
    {
        return $this->belongsTo(SelectServices::class, "select_service_name");
    }

    public function deadline()
    {
        return $this->belongsTo(DayModel::class, "deadline_name");
    }
}
