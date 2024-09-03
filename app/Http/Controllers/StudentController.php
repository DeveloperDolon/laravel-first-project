<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function addStudent(Request $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        return "Student added successfully.";
    }

    function getAllStudents() {
        $students = Student::all();
        return view("student-list", ["students" => $students]);
    }
}
