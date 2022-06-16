<?php

namespace App\Http\Controllers\frontend;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    
    public function showStudents(){
        $students = Student::all();
        return view('frontend.pages.student.index',[
            'studentData' => $students
        ]);
    }
}
