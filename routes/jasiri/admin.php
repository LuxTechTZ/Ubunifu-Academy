<?php

     // Registered and Activated User Routes
	Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {


});