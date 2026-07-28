<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course=Course::all();
        return view('course.index',[
            'course'=>$course
        ]);
    }
    }
    /**
     * Show the form for creating a new resource.
     */
  



