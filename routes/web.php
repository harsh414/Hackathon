<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::group(['middleware'=>['auth']],function(){
    // Route::get('/admin',function(){
    //     return view('admin.dashboard');
    // });
    Route::resource('apply','ApplyController');
    Route::get('/applications',function(){
        $user=Auth::user();
        return view('main.application')->with('user',$user);
    });


});

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin','AdminController@index');
    Route::get('/edit/{id}','AdminController@edit');
    Route::put('/update/{id}','AdminController@update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/aim','HomeController@ouraim')->name('aim');
