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


Route::get('/drills/new', 'DrillsController@new')->name('drills.new');
Route::post('/drills', 'DrillsController@create')->name('drills.create');
Route::get('/drills', 'DrillsController@index')->name('drills');
Route::post('/drills/{id}', 'DrillsController@update')->name('drills.update');
Route::post('/drills/{id}/delete', 'DrillsController@destroy')->name('drills.delete');
Auth::routes();
Route::get('/drills', 'DrillsController@create')->name('drills.create');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
