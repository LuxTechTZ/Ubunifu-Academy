<?php

use App\Http\Controllers\Academy\CategoryController;
use App\Http\Controllers\Academy\CourseController;
use App\Http\Controllers\Academy\LessonController;
use App\Http\Controllers\Academy\MaterialController;

// Course
    Route::get('/courses/my_courses', 'CourseController@studentCourses');

//  Categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin_categories');
    Route::get('/admin/categories/create', [CategoryController::class, 'create']);
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('store_category');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('edit_category');
    Route::post('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('update_category');


    //  Courses
    Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin_courses');
    Route::get('/admin/courses/create', [CourseController::class, 'create']);
    Route::post('/admin/courses/store', [CourseController::class, 'store'])->name('store_course');
    Route::get('/admin/courses/edit/{id}', [CourseController::class, 'edit'])->name('edit_course');
    Route::post('/admin/courses/update/{id}', [CourseController::class, 'update'])->name('update_course');

    Route::get('/admin/courses/lessons/{id}', [LessonController::class, 'index'])->name('course_lessons');

        //  Lessons
    Route::get('/admin/lessons', [LessonController::class, 'index'])->name('admin_lessons');
    Route::post('/admin/lessons/store', [LessonController::class, 'store'])->name('store_lessons');
    Route::post('/admin/lessons/update/{id}', [LessonController::class, 'update'])->name('update_lessons');


        //  Materials
    Route::get('/admin/courses/lesson/materials/{id}', [MaterialController::class, 'index'])->name('admin_course_material');

    Route::post('/upload/video', [MaterialController::class, 'uploadVideo']);

    Route::get('/admin/courses/materials/create', [MaterialController::class, 'create']);
    Route::post('/admin/courses/materials/store', [MaterialController::class, 'store'])->name('store_material');
    Route::get('/admin/courses/materials/edit/{id}', [MaterialController::class, 'edit'])->name('edit_material');
    Route::post('/admin/courses/materials/update/{id}', [MaterialController::class, 'update'])->name('update_material');
