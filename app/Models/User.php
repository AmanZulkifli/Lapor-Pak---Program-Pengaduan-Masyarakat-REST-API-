<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
    *  The attributes that are mass assignable.
    *
    * @var array<int, string>
    */

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function staffProvinces()
    {
        return $this->hasOne(StaffProvince::class, 'user_id', 'id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class, 'staff_id');
    }
}
