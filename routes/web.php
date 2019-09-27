<?php


// Route::get('/users', function () {
//     return view('pages.users.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['prefix' => 'backend', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::resource('users', 'UsersController')->except(['create', 'store', 'delete']);

});
