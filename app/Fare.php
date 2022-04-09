<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'academic_level_id',
        'deadline_id',
        'per_page_price',
    ];


    public function academic_level()
    {
        return $this->belongsTo(AcademicLevel::class, "academic_level_id");
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class, "deadline_id");
    }

}
