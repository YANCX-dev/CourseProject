<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    use HasFactory;

    protected $fillable = [
        'arrivalTime',
        'route_id',
        'bus_id',
        'ticketPrice',
        'departureDate',
        'departureTime',
        'arrivalDate',
    ];

    public $timestamps = false;


    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function dest()
    {
        //cruise.route_id -> route.id -> route.destinatin_id -> destination.id
        return $this->hasOneThrough(
            Destination::class,
            Route::class,
            'id', // Destination id
            'id', // Route id
            'route_id', // Cruise.route_id
            'destination_id', // Route.destination_id

        );
    }

}
