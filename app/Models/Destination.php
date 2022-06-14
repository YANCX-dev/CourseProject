<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'destination'
    ];


    public function cruises()
    {
        return $this->hasManyThrough(Cruise::class,Route::class);
    }

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
