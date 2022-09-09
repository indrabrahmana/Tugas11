<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use GuzzleHttp\Middleware;
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
    return view('frontview.index');
});



Route::get('index', [HomeController::class, 'showindex']);
Route::get('account', [HomeController::class, 'showaccount']);
Route::get('cart', [HomeController::class, 'showcart']);
Route::get('produk1', [HomeController::class, 'showproduk1']);
Route::get('register', [HomeController::class, 'showregister']);
Route::get('shop', [HomeController::class, 'showshop']);
Route::get('whislist', [HomeController::class, 'showWhislist']);
Route::get('checkout', [HomeController::class, 'showCheckout']);
Route::get('detail', [HomeController::class, 'showdetail']);


Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);


Route::get('colegan', [HomeController::class, 'showcolegan']);
Route::get('dashboard', [HomeController::class, 'showdashboard']);
Route::get('dashboard/{status}', [HomeController::class, 'showdashboard']);
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('promo', [HomeController::class, 'showdetail']);
Route::get('register', [AuthController::class, 'showregister']);
Route::get('supplier', [HomeController::class, 'showdetail']);
Route::get('user', [HomeController::class, 'showuser']);
Route::get('produk2', [HomeController::class, 'showproduk2']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::get('login', [AuthController::class, 'showlogin',])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('alamat', [HomeController::class, 'showalamat']);



Route::get('/template', function () {
    return view('Template.base');
});






