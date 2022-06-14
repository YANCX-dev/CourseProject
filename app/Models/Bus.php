<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'mark_id',
        'busRegNum',
        'countOfPlaces',
    ];


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }
}
