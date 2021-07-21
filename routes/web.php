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
    Route::get('/store-style', [App\Http\Controllers\ShopStyleController::class, 'store_style'])->name('shop-first');
    Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'about_us'])->name('about-us');
    Route::get('/all-for', [App\Http\Controllers\AllForController::class, 'all_for'])->name('all-for');
    Route::get('/bestseller', [App\Http\Controllers\BestSellerController::class, 'best_seller'])->name('bestseller');
    Route::get('/hot-offer', [App\Http\Controllers\HotOfferController::class, 'hot_offer'])->name('hot-offer');
    Route::get('/policies', [App\Http\Controllers\PoliciesController::class, 'policies'])->name('policies');
    Route::get('/product/{slug}', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'questions'])->name('questions');
    Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
    Route::post('/get_menu', [App\Http\Controllers\CategoryController::class, 'menu_in_sub_menu'])->name('menu.submenu');
    Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
    Route::post('/get_sub_cat', [App\Http\Controllers\CategoryController::class, 'sub_menu_in_sub_cat'])->name('sub_menu.sub_cat');
    Route::post('/add_product', [App\Http\Controllers\ProductController::class, 'add_product'])->name('add.product');
    Route::post('/add_shop', [App\Http\Controllers\ShopController::class, 'add_store'])->name('add.shop');
    Route::get('/edit-store', [App\Http\Controllers\ShopController::class, 'edit_store'])->name('edit.store.show');
    Route::post('/edit-storepost', [App\Http\Controllers\ShopController::class, 'edit_store_post'])->name('edit.store');
    Route::post('/edit-productshort', [App\Http\Controllers\ProductController::class, 'edit_short'])->name('edit.short');
    Route::get('/edit-productmore', [App\Http\Controllers\ProductController::class, 'edit_more'])->name('edit.more');
    Route::post('/edit-productmorepost', [App\Http\Controllers\ProductController::class, 'edit_morepost'])->name('edit.morepost');
    Route::post('/delete-selected', [App\Http\Controllers\ProductController::class, 'delete_selected'])->name('delete.selected');
    Route::post('/delete-current', [App\Http\Controllers\ProductController::class, 'delete_current'])->name('delete.current');
    Route::post('/change-data', [App\Http\Controllers\UserController::class, 'change_data'])->name('change.data');
    Route::get('/delete-avatar', [App\Http\Controllers\UserController::class, 'delete_avatar'])->name('delete.avatar');
    Route::get('/basket', [App\Http\Controllers\BasketController::class, 'index'])->name('basket');
    Route::post('/addbasket', [App\Http\Controllers\BasketController::class, 'add_basket'])->name('add.basket');
    Route::post('/singlestore', [App\Http\Controllers\BasketController::class, 'single_store_products'])->name('basket.single.store');
    Route::post('/delete-basket', [App\Http\Controllers\BasketController::class, 'delete_basket'])->name('delete.basket');
    Route::post('/edit-basket', [App\Http\Controllers\BasketController::class, 'edit_basket'])->name('edit.basket');
    Route::get('/add-categories-section', [App\Http\Controllers\CategoryController::class, 'add_categories_section'])->name('add_categories.section');
    Route::get('/add-options-section', [App\Http\Controllers\ProductController::class, 'add_options_section'])->name('add_option.section');




});



