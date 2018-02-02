<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('admin.home');
// })->name('home');
Route::get('/home', 'DashboardController@dashboard')->name('home');
Route::resource('category', 'CategoryController');
Route::resource('type', 'TypeController');
Route::resource('restaurant', 'RestaurantController');
Route::resource('menu', 'MenuController');
Route::resource('promotion', 'PromotionController');
Route::resource('page', 'PageController');
Route::resource('tax', 'TaxController');
