<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Auth;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/live-chat', [AgoraVideoController::class,'index']);
    Route::post('/agora/token', [AgoraVideoController::class,'token']);
    Route::post('/agora/call-user', [AgoraVideoController::class,'callUser']);
});

Route::get('check_credential',[DefaultController::class,'check_credential'])->name('check_credential');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
