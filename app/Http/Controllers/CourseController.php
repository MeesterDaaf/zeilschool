<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        // dd($courses);

        $data = ['courses' => $courses];

        return view('course/index', $data);
    }
}
