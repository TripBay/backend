<?php


// Route::get('/users', function () {
//     return view('pages.users.index');
// });

// Route::get('locked', function(){
//     return view('auth.locked');
// })->name('auth.locked');

Auth::routes([
    'register' => false, // Registration Routes...
  ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['prefix' => 'backend', 'middleware' => ['auth', 'is_admin', 'auth.lock']], function() {
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RoleController');
    Route::resource('articles', 'ArticleController');
    Route::resource('accounts', 'AccountsController');
    Route::resource('profile', 'ProfilesController')->only(['index', 'edit', 'update'])->parameters(['profile' => 'user']);
    Route::resource('faqs', 'FaqController');

    Route::get('pricing', function(){
        return view('pages.pricing.index');
    })->name('pricing');

});

Route::get('login/locked', 'Auth\LoginController@locked')->middleware(['auth'])->name('login.locked');

Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');