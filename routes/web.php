<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\MetodePembayaranController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublikController::class, 'index']);

// dashboadr
Route::group(['middleware' => ['auth']], function(){
Route::prefix('admin')->group(function () {
    // Controller : Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [DashboardController::class, 'logout']);

    // Controller : Produk
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/addproduk', [ProdukController::class, 'create']);
    Route::post('/storeproduk', [ProdukController::class, 'store']);
    Route::get('/detailproduk/{id}', [ProdukController::class, 'show']);
    Route::get('/editproduk/{id}', [ProdukController::class, 'edit']);
    Route::post('/proses_editproduk/{id}', [ProdukController::class, 'update']);
    Route::get('/deleteproduk/{id}', [ProdukController::class, 'destroy']);

    // Controller : Kategori Produk
    Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']); 
    Route::get('/addkategoriproduk', [KategoriProdukController::class, 'create']);
    Route::post('/storekategoriproduk', [KategoriProdukController::class, 'store']);
    Route::get('/deletekategoriproduk/{id}', [KategoriProdukController::class, 'destroy']);

     // Controller : Pesanan
     Route::get('/pesanan', [PesananController::class, 'index']);
     Route::get('/detailpesanan/{id}', [PesananController::class, 'show']);
     Route::get('/deletepesanan/{id}', [PesananController::class, 'destroy']);

     // controller Metode Pembayaran
     Route::get('/metodepembayaran', [MetodePembayaranController::class, 'index']); 
     Route::get('/addmetodepembayaran', [MetodePembayaranController::class, 'create']);
     Route::post('/storemetodepembayaran', [MetodePembayaranController::class, 'store']);
     Route::get('/deletemetodepembayaran/{id}', [MetodePembayaranController::class, 'destroy']);
});
});

Route::prefix('Publik')->group(function () {
    Route::get('/Home', [PublikController::class, 'index']);
    Route::get('/tentang', [PublikController::class, 'tentangKami']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
