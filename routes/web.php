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
    Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'about_us'])->name('about-us');
    Route::get('/all-for', [App\Http\Controllers\AllForController::class, 'all_for'])->name('all-for');
    Route::get('/bestseller', [App\Http\Controllers\BestSellerController::class, 'best_seller'])->name('bestseller');
    Route::get('/hot-offer', [App\Http\Controllers\HotOfferController::class, 'hot_offer'])->name('hot-offer');
    Route::get('/policies', [App\Http\Controllers\PoliciesController::class, 'policies'])->name('policies');
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'questions'])->name('questions');

    Route::get('/account',[App\Http\Controllers\AccountController::class, 'index'])->name('account');
    Route::post('/get_menu', [App\Http\Controllers\CategoryController::class, 'menu_in_sub_menu'])->name('menu.submenu');
    Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
    Route::get('/blog-name', [App\Http\Controllers\BlogNameController::class, 'blog_name'])->name('blog-name');
    Route::post('/get_sub_cat', [App\Http\Controllers\CategoryController::class, 'sub_menu_in_sub_cat'])->name('sub_menu.sub_cat');
    Route::post('/add_product', [App\Http\Controllers\ProductController::class, 'add_product'])->name('add.product');
    Route::post('/add_shop', [App\Http\Controllers\ShopController::class, 'add_store'])->name('add.shop');


});



