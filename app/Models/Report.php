<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'type',
        'title',
        'province',
        'regency',
        'subdistrict',
        'village',
        'voting',
        'viewers',
        'statement',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function responses()
    {
        return $this->hasOne(Response::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function progress()
{
    return $this->hasMany(ResponseProgress::class, 'response_id', 'id');
}
}
