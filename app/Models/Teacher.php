<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'father_name',
        'mother_name',
        'subject',
        'nic',
        'level',
        'email',
        'address',
        'phone',
        'bio',
        'image',
    ];

    //many to many
    public function students() {
        return $this->belongsToMany(Student::class);
    }
}
