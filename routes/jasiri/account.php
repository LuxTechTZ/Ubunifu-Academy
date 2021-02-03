<?php 
	Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {


     Route::get('account/dashboard', 'DashboardController@index');

     Route::get('account/messages', 'MessageController@inbox');

     Route::get('account/profile', 'ProfileController@index');
     Route::post('account/profile/uploadphoto', 'ProfileController@uploadPhoto');

     // Courses Student
     Route::get('account/student/courses', 'CourseController@studentCourses');
     
     Route::get('account/mycourses', 'CourseController@TeachersCourse');
     Route::get('account/courses/edit/{course_id}', 'CourseController@course');

     // Courses Create
     Route::get('account/courses/create', 'CourseController@create');
     Route::post('account/courses/upload_video/{course_id}', 'CourseController@uploadToLonode');

     Route::post('account/courses/upload_to_jw', 'CourseController@uploadToJW');
     Route::post('account/courses/upload_to_vimeo', 'CourseController@UploadToVimeo');

     Route::post('account/courses/store', 'CourseController@storeCourse');


     // Lesson 
     Route::get('account/courses/lesson/create/{course_id}', 'LessonController@create');
     Route::post('/account/courses/lesson/part/create/', 'PartController@create');

     // Materials
     Route::get('account/courses/material/create/{part_id}', 'MaterialController@create');
     Route::post('account/courses/material/store/{part_id}', 'MaterialController@store');
     Route::get('account/courses/material/edit/{material_id}', 'MaterialController@edit');
     Route::post('account/courses/material/create/upload/{part_id}', 'MaterialController@upload');

     // Upload mterial
     Route::post('account/courses/material/upload/{part_id}', 'MaterialController@uploadToLonode');

});