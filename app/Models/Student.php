<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'first_name', 
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'address',
        'gender',
        'admission_id',
        'family_id',
        'phone',
        'bio',
        'level',
        'image',

    ];
    
    //one to many
    public function level() {
        return $this->belongsTo(Level::class);
    }
    public function family() {
        return $this->belongsTo(Family::class);
    }
    //many to many
    // public function profs() {
    //     return $this->belongsToMany(Teacher::class);
    // }
}
