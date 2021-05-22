<?php

use App\Http\Controllers\Academy\BookBookCategoryController;
use App\Http\Controllers\Academy\BookCategoryController;
use App\Http\Controllers\Academy\BookController;
use App\Http\Controllers\Academy\LessonController;
use App\Http\Controllers\Academy\MaterialController;

// Course
    Route::get('/books/my_books', 'BookController@studentCourses');

//  Categories
    Route::get('/admin/books_categories', [BookCategoryController::class, 'index'])->name('admin_books_categories');
    Route::get('/admin/books_categories/create', [BookCategoryController::class, 'create']);
    Route::post('/admin/books_categories/store', [BookCategoryController::class, 'store'])->name('store_book_category');
    Route::get('/admin/books_categories/edit/{id}', [BookCategoryController::class, 'edit'])->name('edit_category');
    Route::post('/admin/books_categories/update/{id}', [BookCategoryController::class, 'update'])->name('update_book_category');


    //  Courses
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin_books');
    Route::get('/admin/books/create', [BookController::class, 'create']);
    Route::post('/admin/books/store', [BookController::class, 'store'])->name('store_book');
    Route::get('/admin/books/edit/{id}', [BookController::class, 'edit'])->name('edit_book');
    Route::post('/admin/books/update/{id}', [BookController::class, 'update'])->name('update_book');


    Route::get('/admin/books/lessons/{id}', [LessonController::class, 'index'])->name('course_lessons');


        //  Materials
    Route::get('/admin/books/lesson/materials/{id}', [MaterialController::class, 'index'])->name('admin_course_material');

    Route::post('/upload/video', [MaterialController::class, 'uploadVideo']);

    Route::get('/admin/books/materials/create', [MaterialController::class, 'create']);
    Route::post('/admin/books/materials/store', [MaterialController::class, 'store'])->name('store_material');
    Route::get('/admin/books/materials/edit/{id}', [MaterialController::class, 'edit'])->name('edit_material');
    Route::post('/admin/books/materials/update/{id}', [MaterialController::class, 'update'])->name('update_material');
