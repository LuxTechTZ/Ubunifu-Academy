<?php

use App\Http\Controllers\Academy\MaterialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

     Route::any('/courses/test', 'App\Http\Controllers\Jasiri\CourseController@name');

     Route::get('/dpo/end/{id}', 'App\Http\Controllers\Jasiri\CartController@paymentByDpo');

     Route::post('/upload/video', [MaterialController::class, 'uploadVideo']);
