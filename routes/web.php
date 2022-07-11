<?php

use App\Http\Controllers\Auth\SingupController;
use App\Http\Controllers\Auth\SinginController;
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
    return view('main');
});

Route::get('/singin', [SinginController::class, 'index'])->name('singin');

Route::get('/singup', [SingupController::class, 'index'])->name('singup');
Route::post('/singup', [SingupController::class, 'store']);
