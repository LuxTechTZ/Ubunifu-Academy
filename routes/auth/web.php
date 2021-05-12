<?php
    // Course
    Route::get('/admin/users', 'App\Http\Controllers\UsersManagementController@index');

    // Route::get('/myprofile/{username}', 'App\Http\Controllers\UserAccManagementController@bio')->name('myprofile');;


    // Single Account management
    Route::get('/admin/users/profile/{id}', 'App\Http\Controllers\UsersManagementController@show');
    // User Details
    Route::get('/admin/users/bio/{id}', 'App\Http\Controllers\ProfimeManagementController@bio');
    Route::get('/admin/users/interests/{id}', 'App\Http\Controllers\ProfimeManagementController@interests');
    Route::get('/admin/users/mobile/{id}', 'App\Http\Controllers\ProfimeManagementController@mobile');
    Route::get('/admin/users/media/{id}', 'App\Http\Controllers\ProfimeManagementController@media');
    Route::get('/admin/users/payment/{id}', 'App\Http\Controllers\ProfimeManagementController@payment');
    Route::get('/admin/users/transactions/{id}', 'App\Http\Controllers\ProfimeManagementController@transactions');
    Route::get('/admin/users/security/{id}', 'App\Http\Controllers\ProfimeManagementController@security');
    Route::get('/admin/users/upgrade_plan/{id}', 'App\Http\Controllers\ProfimeManagementController@upgrade_plan');
    Route::get('/admin/users/invite_friends/{id}', 'App\Http\Controllers\ProfimeManagementController@invite_friends');
    Route::get('/admin/users/connected_accounts/{id}', 'App\Http\Controllers\ProfimeManagementController@connected_accounts');
