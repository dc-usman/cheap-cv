<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FareModel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'carrer_level_id',
        'select_service_id',
        'day_model_id',
        'fare',
    ];


    public function carrer_level()
    {
        return $this->belongsTo(CarrerLevelModel::class, "carrer_level_id");
    }

    public function select_service()
    {
        return $this->belongsTo(SelectServices::class, "select_service_id");
    }

    public function deadline()
    {
        return $this->belongsTo(DayModel::class, "day_model_id");
    }

}
