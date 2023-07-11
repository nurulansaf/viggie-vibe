<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananItemController;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/salam', function () {
    return "Selamat Siang Pak Rojul";
});

Route::get('/about', function () {
    return "Nurul Anisa Fitriya - SI01";
});

Route::get('/tentang', function () {
    return view('tentang', [
        "nama" => "Nurul Anisa Fitriya",
        "umur" => 20
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "STT Terpadu Nurul Fikri",
        "prodi" => "
        Sistem Informasi,
        Teknik Informatika &
        Bisnis Digital
        "
    ]);
});

Route::get('/TugasTable', function () {
    return view('table');
});

// TUGAS W9
Route::prefix('Mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::post('/output_form', [MahasiswaController::class, 'output_form']);
});

// dashboard
Route::group(['middleware' => ['auth', 'adminmanager']], function () {
    Route::prefix('admin')->group(function () {
        // Controller : Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        // Controller : Produk
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/addproduk', [ProdukController::class, 'create']);
        Route::post('/storeproduk', [ProdukController::class, 'store']);
        Route::get('/editproduk/{id}', [ProdukController::class, 'edit']);
        Route::get('/detailproduk/{id}', [ProdukController::class, 'show']);
        Route::post('/proses_editproduk/{id}', [ProdukController::class, 'update']);
        Route::get('/deleteproduk/{id}', [ProdukController::class, 'destroy']);

        // Controller : Kategori Produk
        Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
        Route::get('/addkategoriproduk', [KategoriProdukController::class, 'create']);
        Route::post('/storekategoriproduk', [KategoriProdukController::class, 'store']);
        Route::get('/deletekategoriproduk/{id}', [KategoriProdukController::class, 'destroy']);

        // Controller : Pesanan item
        Route::get('/pesanan_item', [PesananItemController::class, 'index']);
        Route::post('/storepesananitem', [PesananItemController::class, 'store']);
        Route::get('/detailpesananitem/{id}', [PesananItemController::class, 'show']);
        Route::get('/deletepesananitem/{id}', [PesananItemController::class, 'destroy']);
        
    });
});

Route::prefix('Publik')->group(function () {
    Route::get('/Home', [PublikController::class, 'index']);
    Route::get('/tentang', [PublikController::class, 'tentangKami']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pesanan_item', function () {
    return '';
});
