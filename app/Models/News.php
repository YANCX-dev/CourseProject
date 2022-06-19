<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'content',
        'image',
    ];


    public function getDateStringAttribute()
    {
        return $this->created_at->format('d.m.Y');
    }

    public function admins()
    {
        return $this->belongsTo(Admin::class);
    }


}
