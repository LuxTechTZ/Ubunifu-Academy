<?php 
	Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {


     Route::get('account/dashboard', 'DashboardController@index');

     Route::get('account/messages', 'MessageController@inbox');

     Route::get('account/profile', 'ProfileController@index');
     Route::post('account/profile/uploadphoto', 'ProfileController@uploadPhoto');

     // Courses
     Route::get('account/courses', 'CourseController@studentCourses');

     // Courses Create
     Route::get('account/courses/create', 'CourseController@create');
     Route::post('account/courses/upload_video', 'CourseController@uploadToLonode');

});