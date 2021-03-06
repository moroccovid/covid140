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
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::resource('fiches', 'ficheController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page', 'ficheController@page')->name('page');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('traitemants','traitementController');
});


Route::get('/listarchive', 'traitementController@listarchive')->name('listarchive');
Route::get('/home', 'HomeController@index')->name('home');
