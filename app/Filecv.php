<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filecv extends Model
{
    public $table = 'filecvs';

    public $timestamps = false;

    protected $fillable = [
        'id',
        "order_id",
        "file_path"
    ];

    public function ordercv()
    {
        return $this->belongsTo(Ordercv::class, 'order_id');
    }
}
