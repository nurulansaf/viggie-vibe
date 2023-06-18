<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikController extends Controller
{
    //
    public function index(){
        $produk = new Produk();
        return view('publik.home', ['produk' => $produk->getAllData()]);
        // return view('publik.home');

    }

    
    public function tentangKami(){
        return view('publik.tentang-kami');

    }

}
