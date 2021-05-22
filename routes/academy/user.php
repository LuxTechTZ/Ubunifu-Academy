<?php

use App\Http\Controllers\Academy\StudentController;

Route::get('/account/student/my_courses', [StudentController::class,"myCourses"]);
