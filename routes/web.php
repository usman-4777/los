<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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


Route::get('/form', [\App\Http\Controllers\DeveloperController::class, 'create'])->name('form');
Route::get('/get_developers', [\App\Http\Controllers\DeveloperController::class, 'index'])->name('get_developers');
Route::post('/store', [\App\Http\Controllers\DeveloperController::class, 'store'])->name('store');

Route::get('/welcome', function () {
    return view('welcome');
});
/*
 * shop_staff check routes
 */
//Route::get('/shopstaff', function (){
//   return view('/admindashboard.shop_staff.view_all_shop_staff');
//});


Route::get('/admindashboard', function (){
    return view('admindashboard.index');
});
Route::group(['middlewarw' => ['auth', 'isadmin']],function (){
    Route::resources([
        'shop' => \App\Http\Controllers\ShopController::class,

    ]);
//    return view('shop.add_shops');
});

//Route::view('/admindashboard', '.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('delete/{shop}',[\App\Http\Controllers\ShopController::class, 'destroy'])->name('delete_shop');
//Route::resources('shop_staff', \App\Http\Controllers\ShopStaffController::class);
//Route::get([
//    'shop_staff' => \App\Http\Controllers\ShopStaffController::class,
//]);

//Route::resource('/shopstaff', \App\Http\Controllers\ShopStaffController::class);
Route::get('delete/{shopstaff}',[App\Http\Controllers\ShopStaffController::class, 'destroy'])->name('delete_shopstaff');

//Route::resources(['shopstaff' => \App\Http\Controllers\ShopStaffController::class,]);
//Route::resources('shopstaff', [\App\Http\Controllers\ShopStaffController::class]);


Route::resource('shopstaff', \App\Http\Controllers\ShopStaffController::class);
Route::get('/add-shop-staff', [\App\Http\Controllers\ShopStaffController::class, 'create'])->name('add-shop-staff');
//Route::get('/products', function (){
//   return view('admindashboard.products.add_products');
////   return view('admindashboard.products.view_all_products');
//// return view('admindashboard.products.edit_products');
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::get('/add_products', [\App\Http\Controllers\ProductController::class, 'create'])->name('add-products');

Route::get('delete-product/{delete}',[App\Http\Controllers\ProductController::class, 'destroy'])->name('delete_product');


