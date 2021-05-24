<?php

use App\Http\Controllers\Academy\MaterialController;
use App\Http\Controllers\Academy\StudentController;
use App\Http\Controllers\Academy\TeacherController;

Route::get('/account/student/my_courses', [StudentController::class,"myCourses"])->name('student_courses');


// Teacher
Route::get('/account/teacher/courses', [TeacherController::class,"myCourses"])->name('teacher_courses');
Route::get('/account/teacher/courses/create', [TeacherController::class,"createCourse"])->name('teacher_create_courses');
Route::post('/account/teacher/courses/store', [TeacherController::class,"storeCourse"])->name('teacher_store_course');
Route::get('/account/teacher/courses/edit/{id}', [TeacherController::class,"editCourse"])->name('teacher_edit_course');
Route::post('/account/teacher/courses/update/{id}', [TeacherController::class,"updateCourse"])->name('teacher_update_course');

Route::get('/account/teacher/courses/{id}/lesson', [TeacherController::class,"lessons"])
    ->name('teacher_course_lessons');

Route::post('/account/teacher/courses/lesson/store', [TeacherController::class,"storeLesson"])->name('teacher_store_lessons');
Route::get('/account/teacher/courses/lesson/{id}/materials', [MaterialController::class, 'index'])->name('teacher_add_material');
