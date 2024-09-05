<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    //
    public function getAllCourse()
    {
        return Course::find(1);
    }

    public function index(Course $key) {
        return $key;
    }

}
