<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'class_id',
        'due_date',
        'status'
    ];

    protected $dates = ['due_date'];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'class_user', 'class_id', 'user_id');
    }

    public function userAssignments()
    {
        return $this->hasMany(UserAssignment::class);
    }
}
