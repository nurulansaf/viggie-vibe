<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //

    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan seluruh data kategori produk
        $kategori_produk = KategoriProduk::all();

        // menampilkan seluruh data produk
        $produk = Produk::all();
        return view('admin.produk.add_produk', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat instance di ambil dari class produk
        // ambil daata di input di form create menggunakan parameter request
        // simpan data yang di ambil ke dalam colom table produk
        // save semua data ke dalam instance produk menggunakan method save
        // kembalikan ke tampilan produk, setelah klik button submit 

        $produk = new Produk();
        $produk->kode_produk        = $request->kode_produk;
        $produk->nama_produk        = $request->nama_produk;
        $produk->gambar_produk      = $request->gambar_produk;
        $produk->stok               = $request->stok;
        $produk->min_stok           = $request->min_stok;
        $produk->harga_beli         = $request->harga_beli;
        $produk->harga_jual         = $request->harga_jual;
        $produk->deskripsi          = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);

        // Untuk mencari id produk yang ada pada data pesanan yang dipilih
        $kategori_produk = KategoriProduk::where('id', $produk->kategori_produk_id)->first();

        return view('admin.produk.detail_produk', compact('kategori_produk', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit_produk', compact('produk','kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // 
        $produk = Produk::find($request->id);
        $produk->kode_produk        = $request->kode_produk;
        $produk->nama_produk        = $request->nama_produk;
        $produk->gambar_produk      = $request->gambar_produk;
        $produk->stok               = $request->stok;
        $produk->min_stok           = $request->min_stok;
        $produk->harga_beli         = $request->harga_beli;
        $produk->harga_jual         = $request->harga_jual;
        $produk->deskripsi          = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        // $produk->save();


        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tbale produk
        // cari data yang ingn di hapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
