<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananItem;
use App\Models\MetodePembayaran;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikController extends Controller
{
    //
    public function index(){
        // get data produk dari model produk
        $produk = new Produk();

        return view('publik.home', [
            'produk' => $produk->getAllData()
        ]);
        // return view('publik.home');

    }

    public function pesanProduk($id){

        // get data produk dari model produk
        // $produk = new Produk();
        
        // menampilkan seluruh data produk
        $pesanan = Pesanan::all();
        
        // menampilkan seluruh data produk
        $pproduk = Produk::all();

        // menampilkan seluruh data kategori produk
        $metode_pembayaran = MetodePembayaran::all();

        // detail produk
        $produk = Produk::find($id);
        
        // detail kategori produk
        $kproduk = KategoriProduk::find($id);

        return view('publik.pesan-produk', [
            'metode_pembayaran' => $metode_pembayaran,
            'pesanan' => $pesanan,
            'pproduk' => $pproduk,
            'produk' => $produk,
            'kproduk' => $kproduk
        ]);

    }

    public function prosesPesanProduk(Request $request){
        // Buat instance Pesanan
        $pesanan = new Pesanan();
        $pesanan->produk_id = $request->produk_id;
        $pesanan->nama = $request->nama;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->alamat = $request->alamat;
        $pesanan->tgl_pesanan = $request->tgl_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->id_metode_pembayaran = $request->id_metode_pembayaran;

        // Hitung total harga
        $produk = Produk::findOrFail($request->produk_id);
        $qty = $request->qty;
        $totalHarga = $produk->harga_jual * $qty;

        // Simpan total harga dan qty ke dalam pesanan
        $pesanan->qty = $qty;
        $pesanan->total_harga = $totalHarga;

        $pesanan->save();

        // Redirect atau lakukan aksi lain setelah berhasil menyimpan pesanan

        return redirect('Publik/Home');
    }

    public function tentangKami(){
        return view('publik.tentang-kami');

    }

}
