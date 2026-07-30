<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * index metodini yaratayabmiz, bu metod kurslar ro'yxatini ko'rsatadi.
     */
    public function index()
    {
        $courses=Course::paginate(9);
        return view('course.index',[
            'course'=>$courses
        ]);
    }
    
/** 
 * Create metodini yaratayabmiz, bu metod kurs yaratish sahifasini ko'rsatadi.
 */
    public function create()
    {
        return view('course.create');
    }
    /**
     * Show the form for creating a new resource.
     */
  

}

