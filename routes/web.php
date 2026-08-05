<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;

/*
|--------------------------------------------------------------------------
| User Panel
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses');

Route::get('/courses/{id}', [CourseController::class, 'show'])
    ->name('course.show');


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Barcha kurslar
    Route::get('/courses', [AdminCourseController::class, 'index'])
        ->name('courses.index');

    // Yangi kurs sahifasi
    Route::get('/courses/create', [AdminCourseController::class, 'create'])
        ->name('courses.create');

    // Kursni saqlash
    Route::post('/courses', [AdminCourseController::class, 'store'])
        ->name('courses.store');

    // Tahrirlash sahifasi
    Route::get('/courses/{course}/edit', [AdminCourseController::class, 'edit'])
        ->name('courses.edit');

    // Yangilash
    Route::put('/courses/{course}', [AdminCourseController::class, 'update'])
        ->name('courses.update');

    // O'chirish
    Route::delete('/courses/{course}', [AdminCourseController::class, 'destroy'])
        ->name('courses.destroy');

});