<?php  
     Route::get('/chuo', 'FrontController@index');
     Route::get('/user_login', 'FrontController@login');
     Route::get('/user_register', 'FrontController@register');
     Route::get('/college', 'NotesController@materials_show');

     Route::get('/product/{id}', 'FrontController@product');
     Route::get('/products/list', 'FrontController@products');
     Route::get('/products/category/{name}', 'FrontController@categories');
     
     // Blog
     Route::get('/blog', 'BlogController@index');
   

     // Registered and Activated User Routes
     Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {
	Route::get('/materials/course/{id}', 'NotesController@course_show');
     Route::get('/materials/course/module/{id}', 'NotesController@module');
     Route::post('/save_college', 'User\ProfileController@save_college');

     // Profile
     Route::get('/profile', 'FrontController@profile');
     Route::get('/orders', 'FrontController@orders');
     Route::get('/edit_profile', 'FrontController@edit_profile');

     Route::post('/user/profile/update/{id}', 'User\ProfileController@user_update');

     // Cart
     Route::get('/adtocart/{id}', 'CartController@store');
     Route::get('/home/cart', 'CartController@index');
     Route::get('/home/cart/{product_id}/{qty}', 'CartController@store');
     Route::post('/home/cart/update/{product_id}', 'CartController@update_qty');
     Route::post('/product/cart/{product_id}', 'CartController@store_product');
     Route::get('/cart/remove/{product_id}', 'CartController@remove_item');

     Route::get('/chekout', 'CartController@chekout');

     // Order
     Route::post('/home/order/create/{id}', 'OrderController@create');
     Route::post('/blog/comment/{id}', 'BlogCommentController@store');

});