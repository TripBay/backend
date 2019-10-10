<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', 'Api\UsersController')->only(['index', 'show']);
Route::resource('accounts', 'Api\AccountsController');
Route::resource('profiles', 'Api\ProfilesController');