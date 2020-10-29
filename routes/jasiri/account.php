<?php 
	Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {


     Route::get('account/dashboard', 'DashboardController@index');
     Route::get('account/courses', 'CourseController@studentCourses');

     Route::get('account/messages', 'MessageController@inbox');

     Route::get('account/profile', 'ProfileController@index');
     Route::post('account/profile/uploadphoto', 'ProfileController@uploadPhoto');
});