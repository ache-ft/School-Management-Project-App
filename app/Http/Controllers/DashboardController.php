<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $students = Student::count();
        $maleStudents = Student::where('gender','male')->count();
        $femaleStudents = Student::where('gender','female')->count();
        $parents = Family::count();
        $teachers = Teacher::count();
        return view('dashboard',[
            'students'=> $students,
            'parents'=> $parents,
            'teachers'=> $teachers,
            'maleStudents'=> $maleStudents,
            'femaleStudents'=> $femaleStudents,
        ]);
    }
}
