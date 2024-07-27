<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_id',
        'student_id',
        'content',
        'grade',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::updated(function ($submission) {
            if (in_array($submission->status, ['under review', 'approved'])) {
                UserAssignment::where('assignment_id', $submission->assignment_id)
                    ->where('user_id', $submission->student_id)
                    ->update(['status' => $submission->status]);

                Log::info('UserAssignment status updated: ', [
                    'assignment_id' => $submission->assignment_id,
                    'user_id' => $submission->student_id,
                    'status' => $submission->status,
                ]);
            }
        });
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'assignment_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
