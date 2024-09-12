<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Nama tabel yang benar

    protected $fillable = [
        'name',
        'description',
        'teacher_id',
        'class_code'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->class_code = self::generateUniqueClassCode();
        });

        static::deleting(function ($class) {
            // Delete related records
            $class->students()->detach();
            $class->assignments()->delete();
        });
    }

    public static function generateUniqueClassCode()
    {
        do {
            $code = Str::random(8);
        } while (self::where('class_code', $code)->exists());

        return $code;
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'class_user', 'class_id', 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'class_user', 'class_id', 'user_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'class_id');
    }

    // Accessor untuk teacher_name
    public function getTeacherNameAttribute()
    {
        return $this->teacher ? $this->teacher->name : 'No SPV';
    }

    // Accessor untuk assignments_count
    public function getAssignmentsCountAttribute()
    {
        return $this->assignments->count();
    }
}
