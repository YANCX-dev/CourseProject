<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'departurePoint',
        'travelTime',
        'destination_id',
    ];

    public function cruises()
    {
        return $this->hasMany(Cruise::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
