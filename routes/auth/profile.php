<?php

	// Show users profile - viewable by other users.
    Route::get('myprofile/{username}/bio', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\UserAccManagementController@bio',
    ]);

    // Route::get('/myprofile/{username}', 'App\Http\Controllers\UserAccManagementController@bio')->name('myprofile');;


    Route::get('/myprofile/{username}', 'App\Http\Controllers\UserAccManagementController@bio')->name('myprofile');;

 // Single Account management
    Route::get('/admin/users/profile/{username}', 'App\Http\Controllers\UsersManagementController@show');
    // User Details
    Route::get('/profile/bio/{username}', 'App\Http\Controllers\UserAccManagementController@bio');
    Route::get('/profile/{username}/interests', 'App\Http\Controllers\UserAccManagementController@interests');
    Route::get('/profile/{username}/mobile', 'App\Http\Controllers\UserAccManagementController@mobile');
    Route::get('/profile/{username}/media', 'App\Http\Controllers\UserAccManagementController@media');
    Route::get('/profile/{username}/payment', 'App\Http\Controllers\UserAccManagementController@payment');
    Route::get('/profile/{username}/transactions', 'App\Http\Controllers\UserAccManagementController@transactions');
    Route::get('/profile/{username}/security', 'App\Http\Controllers\UserAccManagementController@security');
    Route::get('/profile/{username}/upgrade_plan', 'App\Http\Controllers\UserAccManagementController@upgrade_plan');
    Route::get('/profile/{username}/invite_friends', 'App\Http\Controllers\UserAccManagementController@invite_friends');
    Route::get('/profile/{username}/connected_accounts', 'App\Http\Controllers\UserAccManagementController@connected_accounts');