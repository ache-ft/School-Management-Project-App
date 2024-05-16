<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'occupation',
        'cin',
        'email',
        'address',
        'phone',
        'bio',
        'image',
    ];
    public function children() {
        return $this->hasMany(Student::class);
    }

}
