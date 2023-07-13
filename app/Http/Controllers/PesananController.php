<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\MetodePembayaran;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getALLData()]);
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        $pesanan = new Pesanan();
        $pesanan->nama                 = $request->nama;
        $pesanan->no_hp                = $request->no_hp;
        $pesanan->alamat               = $request->alamat;
        $pesanan->tgl_pesanan          = $request->tgl_pesanan;
        $pesanan->deskripsi            = $request->deskripsi;
        $pesanan->id_pembayaran = $request->id_pembayaran;

        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pesanan::find($id);
        
        $produk = Produk::find($id);

        $metode_pembayaran = MetodePembayaran::find($id);

        return view('admin.pesanan.detail_pesanan', compact('produk','metode_pembayaran', 'pesanan'));
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $metode_pembayaran = DB::table('metode_pembayaran')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('admin.pesanan.edit_pesanan', compact('metode_pembayaran', 'pesanan'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->nama                 = $request->nama;
        $pesanan->no_hp                = $request->no_hp;
        $pesanan->alamat               = $request->alamat;
        $pesanan->tgl_pesanan          = $request->tgl_pesanan;
        $pesanan->deskripsi            = $request->deskripsi;
        $pesanan->id_pembayaran = $request->id_pembayaran;

        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tbale pesanan
        // cari data yang ingn di hapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}