<?php

     // Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {
	Route::get('/home/packages', 'PackageController@index');
	Route::get('/home/packages/edit/{id}', 'PackageController@edit');
	Route::get('/home/packages/view/{id}', 'PackageController@show');


	// Colleges
	Route::get('/home/colleges', 'CollegeController@index');
	Route::get('/home/colleges/create', 'CollegeController@create');
	Route::post('/home/colleges/store', 'CollegeController@store');
	Route::get('/home/colleges/edit/{id}', 'CollegeController@edit');
	Route::post('/home/colleges/update/{id}', 'CollegeController@update');
	Route::get('/home/colleges/view/{id}', 'CollegeController@show');


	// Faculties
	Route::get('/home/faculties', 'FacultyController@index');
	Route::get('/home/faculties/create', 'FacultyController@create');
	Route::post('/home/faculties/store', 'FacultyController@store');
	Route::get('/home/faculties/edit/{id}', 'FacultyController@edit');
	Route::post('/home/faculties/update/{id}', 'FacultyController@update');
	Route::get('/home/faculties/view/{id}', 'FacultyController@show');

	// Course
	Route::get('/home/courses', 'CourseController@index');
	Route::get('/home/courses/create', 'CourseController@create');
	Route::post('/home/courses/store', 'CourseController@store');
	Route::get('/home/courses/edit/{id}', 'CourseController@edit');
	Route::post('/home/courses/update/{id}', 'CourseController@update');
	Route::get('/home/courses/view/{id}', 'CourseController@show');
	Route::get('/home/courses/delete/{id}', 'CourseController@destroy');



	// Module
	Route::get('/home/colleges/courses/modules/view/{id}', 'ModuleController@index');
	Route::get('/home/modules/{id}/show', 'ModuleController@index')->name('module.show');

	Route::post('/home/lecture/store', 'LectureController@store');
	Route::post('/home/lecture/update/{id}', 'LectureController@update');
	Route::get('/home/lecture/delete/{id}', 'LectureController@destroy');

	Route::get('/home/courses/create', 'CourseController@create');
	Route::get('/home/courses/edit/{id}', 'CourseController@edit');
	Route::post('/home/courses/update/{id}', 'CourseController@update');
	Route::get('/home/courses/view/{id}', 'CourseController@show');

	Route::post('/home/courses/module/store', 'ModuleController@store');
	Route::post('/home/courses/module/edit/{id}', 'ModuleController@update');
	Route::get('/home/courses/module/delete/{miodule_id}/{course_id}', 'ModuleController@destroy');


	// Payments
	Route::get('/home/payments', 'PaymentController@index');

	// Images
	Route::get('/home/products/imagedelete/{id}', 'ProductController@deleteImage');


	// Products
	Route::get('/home/products', 'ProductController@index');
	Route::get('/home/products/view/{id}', 'ProductController@show');
	Route::post('/home/products/create', 'ProductController@store');
	Route::post('/home/products/updtae/{id}', 'ProductController@update');
	Route::post('/home/products/updateImages/{id}', 'ProductController@updateImages');


	// Orders
	Route::get('/home/orders', 'OrderController@index');
	Route::get('/home/orders/view/{id}', 'OrderController@show');

	// Blog
    Route::get('/home/blog', 'BlogController@blog');

});