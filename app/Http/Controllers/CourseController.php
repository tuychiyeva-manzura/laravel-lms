<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Kurslar ro'yxati
     */
    public function index()
    {
        $courses = Course::paginate(9);

        return view('course.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Bitta kurs haqida ma'lumot
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('course.show', [
            'course' => $course
        ]);
    }
}