<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');
