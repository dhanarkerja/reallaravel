<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class, 'getData'], function () {
    return view('index');
})->name('index');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::post('/create',[UserController::class, 'store'])->name('store');
Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');

Route::get('/edit/{id}',[UserController::class, 'geteditData'], function () {
    return view('edit');
})->name('edit');
Route::put('/edit/{id}',[UserController::class, 'update'])->name('update');
// Route::view('/','index');
// Route::view('/','index')->name('index');
// Route::get('/index',[UserController::class, 'getData']); ini yang betul

// Route::get('index', 'UserController@getData')->name('index');
