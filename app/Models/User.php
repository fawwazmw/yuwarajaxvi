<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'nim',
        'description',
        'profile_image',
        'total_grade'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function classes()
    {
        return $this->belongsToMany(ClassRoom::class, 'class_user', 'user_id', 'class_id');
    }

    public function prodi()
    {
        return $this->belongsToMany(Prodi::class, 'prodi_user');
    }

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class, 'class_user', 'user_id', 'class_id');
    }

    public function userAssignments()
    {
        return $this->hasMany(UserAssignment::class);
    }
}
