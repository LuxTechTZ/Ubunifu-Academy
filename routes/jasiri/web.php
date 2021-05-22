<?php

     // Course
use App\Http\Controllers\Jasiri\BlogController;
use App\Http\Controllers\jasiri\PaymentController;

Route::get('/courses-grid', 'CourseController@index');
     Route::get('/courses-grid/{category}', 'CourseController@index');
     Route::get('/courses-list', 'CourseController@list');

     Route::get('/courses/{category}/{course}', 'CourseController@show');
     Route::get('/courses/details', 'CourseController@courseDetails');
     Route::any('/courses/test', 'CourseController@store');

     // Teacher
     Route::get('/teacher/{id}', 'TeacherController@show');


     // Cart
     Route::get('/cart', 'CartController@showCart');
     Route::get('/cart/remove_item/{id}', 'CartController@removeItem')->name('remove_item');

     Route::get('/dpo/end/{id}', 'CartController@paymentByDpo');
     Route::get('/dpo/response', [PaymentController::class, 'save']);


     // Cart Purchase
     Route::get('/course/purchase/{id}', 'CartController@addCourse');
     Route::get('/book/purchase/{id}', 'CartController@addBook');

     Route::get('/course/purchase/chekout/{id}', 'CartController@payment')->name('chek_out');
     Route::get('/course/purchase/chekout/user/login', 'CartController@userLogin')->name('cart_login');
     Route::post('/course/purchase/login/{cart_id}', 'CartController@loginUser');

     // Cart Order
     Route::post('/course/purchase/chekout/{cart_id}/order', 'CartController@createUser');


     Route::post('home/upload/demo', 'CourseController@upload');
     Route::get('home/upload/demo/play', 'CourseController@playdemo');


     Route::get('home/upload/demo/convert', 'CourseController@convertVideo');


     // Blog
     Route::get('/blog', [BlogController::class,'index']);
     Route::get('/blog/{id}/{name}', [BlogController::class,'post']);

     // Books
     Route::get('/books', 'BookController@index');
     Route::get('/books/{category}/{id}/{name}', 'BookController@show');


     Route::get('contact', function() {
        return view('jasiri.contact');
     });

     Route::get('about', function() {
        return view('jasiri.about');
     });

     Route::get('faq', function() {
        return view('jasiri.faq');
     });
