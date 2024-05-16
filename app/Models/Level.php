<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_name',
        'gender',
        'level',
        'subject',
        'starting_time',
        'ending_time',
        'email',
    ];

    public function students() {
        return $this->hasMany(Student::class);
    }
}
