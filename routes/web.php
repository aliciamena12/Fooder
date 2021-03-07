<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'UserController@index');
// Route::post('users', 'UserController@store')->name('users.store');
// Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

Route::view('/', 'index');
Route::view('/index', 'index');

Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');
Route::put('login', [LoginController::class, 'logout'])->middleware('auth');
// Route::view('register', 'register');

Route::post('login', [LoginController::class, 'login']);