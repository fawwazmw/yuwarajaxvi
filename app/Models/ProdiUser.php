<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiUser extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'prodi_user';

    // Define the fillable attributes
    protected $fillable = [
        'user_id',
        'prodi_id',
    ];

    /**
     * Get the user associated with the prodi_user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the prodi associated with the prodi_user.
     */
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
