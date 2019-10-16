<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['cors']], function(){

    Route::resource('users', 'Api\UsersController')->only(['index', 'show']);
    Route::resource('accounts', 'Api\AccountsController');
    Route::resource('profiles', 'Api\ProfilesController');
    Route::resource('roles', 'Api\RolesController');
    Route::resource('faqs', 'Api\FaqsController');
    Route::resource('articles', 'Api\ArticlesController');

    Route::post('register', 'Api\AuthController@register');
    Route::post('login', 'Api\AuthController@login');
    Route::post('logout', 'Api\AuthController@logout');
});