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
/*Route::resource('employee/k', 'DetailsController');*/
Route::resource('home', 'HomeController');
Route::resource('', 'AtdController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('games/create', 'GamesController@create'); 

Route::get('attendance', ['uses'=>'Atdcontroller@attendance_list']);
Route::get('employee', ['uses'=>'Atdcontroller@index']);
Route::get('employee/create', ['uses'=>'Atdcontroller@create']);






/*Route::post('/register', ['uses'=>'AtdController@store']);
    



Route::get('users', function () {
    return view('users');
}); 


