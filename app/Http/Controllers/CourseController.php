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
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $course=new Course();
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->price=$request->input('price');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $course->image=$imageName;
        }

        $course->save();

        return redirect()->route('courses')->with('success','Kurs muvaffaqiyatli yaratildi.');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function show($id)
    {
        $course=Course::findOrFail($id);
        return view('course.show',[
            'course'=>$course
        ]);
    }

}

