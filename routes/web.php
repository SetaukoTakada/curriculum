<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\TweetsController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

//投稿一覧画面の表示、メインページ
 Route::get('/tweets','App\Http\Controllers\TweetsController@showlist');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
