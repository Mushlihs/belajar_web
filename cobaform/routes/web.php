<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;
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
    return view('mainmenu');
    // echo "test";
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('simpan_data', 'App\Http\Controllers\RegisController@simpan_data');
Route::post('login_usr', 'App\Http\Controllers\Auth@CekAuth');
Route::get('logout_usr', 'App\Http\Controllers\Auth@logout');