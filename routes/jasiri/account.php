<?php 
	Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {


     Route::get('account/dashboard', 'DashboardController@index');

     Route::get('account/messages', 'MessageController@inbox');

     Route::get('account/profile', 'ProfileController@index');
     Route::post('account/profile/uploadphoto', 'ProfileController@uploadPhoto');

     // Courses
     Route::get('account/courses', 'CourseController@studentCourses');
     Route::get('account/mycourses', 'CourseController@TeachersCourse');
     Route::get('account/courses/edit/{course_id}', 'CourseController@course');

     // Courses Create
     Route::get('account/courses/create', 'CourseController@create');
     Route::post('account/courses/upload_video/{course_id}', 'CourseController@uploadToLonode');

     Route::post('account/courses/upload_to_jw', 'CourseController@uploadToJW');
     Route::post('account/courses/upload_to_vimeo', 'CourseController@UploadToVimeo');

     Route::post('account/courses/store', 'CourseController@storeCourse');

});