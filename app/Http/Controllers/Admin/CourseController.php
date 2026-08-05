<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::paginate(10);

        return view('admin.courses.index', [
            'courses' => $courses
        ]);
    }
public function create()
{
    return view('admin.courses.create');
}
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $course = new Course();

    $course->title = $request->title;
    $course->description = $request->description;
    $course->price = $request->price;

    if ($request->hasFile('image')) {

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('images'), $imageName);

        $course->image = $imageName;
    }

    $course->save();

return redirect()
    ->route('admin.courses.index')
    ->with('success', 'Kurs muvaffaqiyatli qo‘shildi.');
}
public function edit(Course $course)
{
    return view('admin.courses.edit', [
        'course' => $course
    ]);
}
public function destroy(Course $course)
{
    // Rasmni ham o'chirish
    if ($course->image && file_exists(public_path('images/' . $course->image))) {
        unlink(public_path('images/' . $course->image));
    }

    $course->delete();

    return redirect()
        ->route('admin.courses.index')
        ->with('success', 'Kurs muvaffaqiyatli o‘chirildi.');
}
}