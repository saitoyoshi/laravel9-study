<?php

use App\Http\Controllers\Study\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/study', [IndexController::class, 'hello']);
Route::get('/study/{id}', [IndexController::class, 'showId'])->whereNumber('id');


Route::get('/tweet', App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::post('/tweet/create', App\Http\Controllers\Tweet\CreateController::class)->name('tweet.create');
