<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('admin.home');
// })->name('home');
Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');
Route::resource('categories', 'AdminAuth\CategoriesController');
Route::resource('customers', 'AdminAuth\CustomersController');
Route::resource('types', 'AdminAuth\TypesController');
Route::resource('merchants', 'AdminAuth\MerchantsController');
Route::resource('restaurants', 'AdminAuth\RestaurantsController');
Route::resource('menu', 'AdminAuth\MenuController');
Route::resource('promotions', 'AdminAuth\PromotionsController');
Route::resource('page', 'AdminAuth\PageController');
Route::resource('tax', 'AdminAuth\TaxController');
Route::resource('groups', 'AdminAuth\GroupsController');
Route::resource('order', 'AdminAuth\OrderController');
Route::resource('orderdetail', 'AdminAuth\OrderDetailController');
Route::get('notifications', 'AdminAuth\FcmController@index')->name('notifications');
Route::post('push', 'AdminAuth\FcmController@store')->name('push');
