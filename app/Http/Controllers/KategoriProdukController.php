<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategori.kategori_produk', ['kategori_produk' => $kategori_produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // menampilkan seluruh data kategori produk
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategori.add_kategoriproduk', compact('kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
         // buat instance di ambil dari class produk
        // ambil daata di input di form create menggunakan parameter request
        // simpan data yang di ambil ke dalam colom table produk
        // save semua data ke dalam instance produk menggunakan method save
        // kembalikan ke tampilan produk, setelah klik button submit 

        $kat = new KategoriProduk();
        $kat->nama_kategori = $request->nama_kategori;

        $kat->save();
        return redirect('admin/kategoriproduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tbale produk
        // cari data yang ingn di hapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('kategori_produk')->where('id_kategori', $id)->delete();
        return redirect('admin/kategoriproduk');
    }
}
