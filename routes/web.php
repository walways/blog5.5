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

use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return "hello world";
})->name('home');
Route::get('/test', 'TestController@show')->name('test')->middleware(CheckAge::class);


Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});


