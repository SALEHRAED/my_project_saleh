<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use PhpParser\Builder\Class_;

class DashboardController extends Controller
{
    public function index()
    {
        $studentsCount = Student::count();
        $teachersCount = Teacher::count();
        $classesCount = Grade::count();
        $subjectsCount = Subject::count();

        return view('dashboard.admin', compact( 'studentsCount','teachersCount','classesCount','subjectsCount'));
    }
}
