<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_id',
        'status',
    ];

    /**
     * Get the student associated with the consultation.
     */
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
