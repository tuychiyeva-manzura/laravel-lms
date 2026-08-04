<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::delete('/courses/{id}/delete', [CourseController::class, 'destroy'])->name('course.destroy');
Route::get('/admin/courses', [AdminCourseController::class, 'index'])
    ->name('admin.courses');