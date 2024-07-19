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
        'class_id'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
