<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('merchant')->user();

    //dd($users);

    return view('merchant.home');
})->name('home');

Route::resource('category', 'MerchantAuth\CategoryController');
Route::resource('restaurant', 'MerchantAuth\RestaurantController');
Route::resource('menu', 'MerchantAuth\MenuController');
