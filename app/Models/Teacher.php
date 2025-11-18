<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Eager load relasi tunggal 'subject'
    protected $with = ['subject'];

    protected $fillable = [
        'name',
        'subject_id',
        'phone',
        'email',
        'address',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
