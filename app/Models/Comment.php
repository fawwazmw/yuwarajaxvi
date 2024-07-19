<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'submission_id',
        'user_id',
        'comment'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class, 'submission_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
