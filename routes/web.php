<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Auth::routes(['verify' => true]);
});
Route::post('/reset_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'send_reset_mail'])->name('reset');
Route::post('/change_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'change_password'])->name('change.password');
Route::post('/change_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'change_password'])->name('change.password');
Route::post('/subscribe', [App\Http\Controllers\SubscribeController::class, 'subscribe'])->name('subscribe.email');



Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
