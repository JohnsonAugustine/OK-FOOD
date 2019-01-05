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
Route::resource('types', 'AdminAuth\TypesController');
Route::resource('merchants', 'AdminAuth\MerchantsController');
Route::resource('restaurant', 'AdminAuth\RestaurantController');
Route::resource('menu', 'AdminAuth\MenuController');
Route::resource('promotion', 'AdminAuth\PromotionController');
Route::resource('page', 'AdminAuth\PageController');
Route::resource('tax', 'AdminAuth\TaxController');
Route::resource('groups', 'AdminAuth\GroupsController');
Route::resource('order', 'AdminAuth\OrderController');
Route::resource('orderdetail', 'AdminAuth\OrderDetailController');


