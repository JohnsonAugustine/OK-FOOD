<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('admin.home');
// })->name('home');
Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');
Route::resource('category', 'AdminAuth\CategoryController');
Route::resource('type', 'AdminAuth\TypeController');
Route::resource('restaurant', 'AdminAuth\RestaurantController');
Route::resource('menu', 'AdminAuth\MenuController');
Route::resource('promotion', 'AdminAuth\PromotionController');
Route::resource('page', 'AdminAuth\PageController');
Route::resource('tax', 'AdminAuth\TaxController');
Route::resource('group', 'AdminAuth\GroupMenuController');
Route::resource('order', 'AdminAuth\OrderController');
Route::resource('orderdetail', 'AdminAuth\OrderDetailController');


