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

Auth::routes(['register'=>false]);
Route::group(array('namespace'=>'Backend', 'middleware'=>'auth'), function (){
   Route::resource('/ringtones', 'RingtoneController');
});
Route::group(array('namespace'=>'Frontend'), function (){
    Route::get('/', 'RingtoneController@index');
});
Route::get('/home', 'HomeController@index')->name('home');
