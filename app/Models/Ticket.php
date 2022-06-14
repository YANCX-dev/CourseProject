<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'place',
        'cruise_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cruises()
    {
        return $this->belongsTo(Cruise::class, 'cruise_id','id');
    }

//    public function routes()
//    {
//        return $this->belongsToMany(Route::class);
//    }


}
