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

//oute::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', 'Home\HomeController@index')->name('home.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::group([ 'prefix' => 'books'], function ()  {
  
  
    Route::get('/', 'Books\BooksController@index')->name('book.index');
    
    
});




Route::group([ 'prefix' => 'cartoons'], function ()  {
  
  
    Route::get('/', 'Cartoons\CartoonsController@index')->name('cartoon.index');
    
    
});