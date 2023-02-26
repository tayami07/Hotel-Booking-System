<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


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

Route::get('/login',[userController::class,'login']);
Route::get('/registration',[userController::class,'registration']);

Route::post('/register-client',[userController::class,'registerClient'])->name('register-client');
Route::post('/login-client',[userController::class,'loginClient'])->name('login-client');

Route::get('/homepage',[userController::class, 'homepage']);
