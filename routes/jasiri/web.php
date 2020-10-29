<?php  

     // Blog
     Route::get('/courses-grid', 'CourseController@index');
     Route::get('/courses-list', 'CourseController@list');

     Route::get('/courses/{category}/{course}', 'CourseController@show');
     Route::any('/courses/test', 'CourseController@store');

     // Teacher
     Route::get('/teacher/{id}', 'TeacherController@show');


     // Cart
     // Cart Purchase
     Route::get('/course/purchase/{id}', 'CartController@createCart');
     Route::get('/course/purchase/chekout/{id}', 'CartController@payment');

     // Cart Order
     Route::post('/course/purchase/chekout/{cart_id}/order', 'CartController@placeOrder');


     Route::post('home/upload/demo', 'CourseController@upload');
     Route::get('home/upload/demo/play', 'CourseController@playdemo');


     Route::get('home/upload/demo/convert', 'CourseController@convertVideo');
