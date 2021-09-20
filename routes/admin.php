<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
// Prefix is admin for all this file routes .  



Route::group(['namespace' => 'Dashboard', 'middleware' =>'auth:admin'] ,function(){
        
    Route::get('/', 'DashboardController@index' )-> name('admin.dashboard') ;
    Route::get('logout' ,'LoginController@logout')-> name('admin.logout') ;


    Route::resource('movies', MoviesController::class);

    
    

});



Route::group(['namespace' => 'Dashboard' , 'middleware' =>'guest:admin'] ,function(){  
        
    Route::get('login', 'LoginController@login' )-> name('admin.login') ;
    Route::post('login', 'LoginController@postLogin' )-> name('admin.post.login') ;
});