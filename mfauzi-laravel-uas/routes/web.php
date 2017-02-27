<?php
use App\Mahasiswa;
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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/add', 'mhscontroller@create');
Route::post('/store', 'mhscontroller@store');
Route::get('/show/{id}', 'mhscontroller@show');
Route::post('/update/{id}', 'mhscontroller@update');
Route::get('/destroy/{id}', 'mhscontroller@destroy');
