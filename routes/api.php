<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', 'Api\CustomerController@customers');
Route::post('/auth/register', 'Api\AuthController@register');
Route::post('/auth/login', 'Api\AuthController@login');
Route::get('/menu/all', 'Api\MenuController@getAllMenu');
Route::get('/menu/{id}', 'Api\MenuController@getMenuByCategory');
Route::get('/category/{id}', 'Api\CategoryController@getAllCategoryByRestaurant');
Route::get('/restaurants', 'Api\RestaurantController@getAllRestaurant');
Route::get('/restaurant/{id}', 'Api\RestaurantController@getAllRestaurantByType');
Route::get('/types', 'Api\TypeController@getAllType');
