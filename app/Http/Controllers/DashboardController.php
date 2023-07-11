<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class DashboardController extends Controller
{

    //
    public function index(){

        //total produk
        $cproduk = Produk::count();

        //total kategori produk
        $ckategori = KategoriProduk::count();

        //total pesanan
        $cpesanan = Pesanan::count();

        return view('admin.dashboard')->with([
            'countProduk' => $cproduk,
            'countKategori' => $ckategori,
            'countPesanan' => $cpesanan
        ]);
    }

    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
}
