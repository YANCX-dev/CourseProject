<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;

    public $timestamps =false;

    protected $fillable = [
        'role',
        'login',
        'password',
    ];

    public function News()
    {
        return $this->hasMany(News::class);
    }
}
