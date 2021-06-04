<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setLocale'], function () {
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Auth::routes(['verify' => true]);
    Route::post('/reset_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'send_reset_mail'])->name('reset');
    Route::post('/change_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'change_password'])->name('change.password');
    Route::post('/change_password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'change_password'])->name('change.password');
    Route::post('/subscribe', [App\Http\Controllers\SubscribeController::class, 'subscribe'])->name('subscribe.email');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/shop-first', [App\Http\Controllers\ShopFirstController::class, 'shop_first'])->name('shop-first');
    Route::get('/shop-second', [App\Http\Controllers\ShopSecondController::class, 'shop_second'])->name('shop-second');
    Route::get('/shop-third', [App\Http\Controllers\ShopThirdController::class, 'shop_third'])->name('shop-third');
    Route::get('/account',[App\Http\Controllers\AccountController::class, 'index'])->name('account');
    Route::post('/get_menu', [App\Http\Controllers\CategoryController::class, 'menu_in_sub_menu'])->name('menu.submenu');


});



