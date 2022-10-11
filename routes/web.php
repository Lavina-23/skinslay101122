<?php

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
    return view('welcome');
});

Route::get('/kategori/{slug}', [\App\Http\Controllers\HomepageController::class,'kategoribyslug']);

Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/produk', [\App\Http\Controllers\HomepageController::class,'produk']);
Route::get('/produk/{id}', [\App\Http\Controllers\HomepageController::class,'produkdetail']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index']);
Route::get('/login', [\App\Http\Controllers\DashboardController::class,'login']);
Route::get('/register', [\App\Http\Controllers\DashboardController::class,'register']);
Route::get('/detail', [\App\Http\Controllers\HomepageController::class,'']);

Route::group(['prefix' => 'admin'] , function(){
    Route::get('/' ,[\App\Http\Controllers\DashboardController::class,'index']);
    
    Route::resource('kategori',\App\Http\Controllers\KategoriController:: class);

    Route::delete('image/{id}',[\App\Http\Controllers\ImageController::class,'destroy']);
    
    Route::post('imagekategori',[\App\Http\Controllers\KategoriController::class,'uploadimage']);
    Route::delete('imagekategori/{id}',[\App\Http\Controllers\KategoriController::class,'deleteimage']);
    
    Route::get('image', [\App\Http\Controllers\ImageController::class,'index']);
    Route::post('image', [\App\Http\Controllers\ImageController::class,'store']);
    Route::delete('image/{id}',[\App\Http\Controllers\ImageController::class,'destroy']);

    Route::resource('produk',\App\Http\Controllers\ProdukController::class);

    Route::resource('customer',\App\Http\Controllers\CustomerController::class);

    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);


    Route::get('profil',[\App\Http\Controllers\UserController::class,'index']);
    Route::get('setting',[\App\Http\Controllers\UserController::class,'setting']);


    Route::get('laporan',[\App\Http\Controllers\LaporanController::class,'index']);
     Route::get('proseslaporan',[\App\Http\Controllers\LaporanController::class,'proses']);

    Route::post('produkimage', [\App\Http\Controllers\ProdukController::class,'uploadimage']);
    Route::delete('produkimage/{id}', [\App\Http\Controllers\ProdukController::class,'deleteimage']);

    Route::resource('slideshow', App\Http\Controllers\SlideshowController::class);
});

Route::resource('cart', App\Http\Controllers\CartController::class);
    Route::patch('kosongkan/{id}',[\App\Http\Controllers\CartController::class,'kosongkan']);
    Route::resource('cartdetail', App\Http\Controllers\CartDetailController::class);
    Route::get('checkout', [\App\Http\Controllers\CartController::class,'checkout']);
    Route::resource('alamatpengiriman', App\Http\Controllers\AlamatPengirimanController::class);
    Route::get('/cari',[\App\Http\Controllers\HomepageController::class,'produk']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');