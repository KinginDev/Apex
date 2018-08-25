<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');


Route::prefix('admin')->group(function(){
    Route::prefix('auth')->group(function(){
      //Show the login form
      Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.show.login');
      //send the login request
      Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.send.login');
      //Logout User
      Route::any('/logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });
    
    Route::prefix('dashboard')->middleware('auth:admin')->group(function(){
       Route::get('/', 'Admin\Controller@dashboard')->name('admin.dashboard'); 
        
        //Blog Resource
        Route::resource('/blog', 'Admin\BlogController');
        //Category Resource
        Route::resource('/category', 'Admin\CategoryController');
    });
});
