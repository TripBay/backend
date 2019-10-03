<?php


// Route::get('/users', function () {
//     return view('pages.users.index');
// });

Auth::routes([
    'register' => false, // Registration Routes...
  ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['prefix' => 'backend', 'middleware' => ['auth', 'is_admin']], function() {
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RoleController');
    Route::resource('articles', 'ArticleController');
    Route::resource('accounts', 'AccountsController');
    Route::resource('profile', 'ProfilesController')->only(['index', 'edit', 'update'])->parameters(['profile' => 'user']);
});
