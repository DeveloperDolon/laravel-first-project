<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function addStudent(Request $request) 
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        return "Student added successfully.";
    }

    function getAllStudents() 
    {
        $students = Student::all();
        return view("student-list", ["students" => $students]);
    }

    function deleteStudent($id) 
    {
        $student = Student::find($id);
        $student->delete();

        if($student) {
            echo "Student deleted";
            return redirect('student-list');
        }
    }

    function update($id)
    {
        $student = Student::find($id);

        return view("update-student", ["student" => $student]);
    }

    public function updateStudent( Request $req, $id) 
    {
        $student = Student::find($id);
        
        $student->name = $req->name;
        $student->email = $req->email;
        $student->password = $req->password;
        
        if($student->save()) {
            return redirect("/student-list");
        } else {
            return "Failed to update student.";
        }
    }
}
