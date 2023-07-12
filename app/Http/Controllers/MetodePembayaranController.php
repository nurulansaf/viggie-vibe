<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodePembayaran;
use Illuminate\Support\Facades\DB;

class MetodePembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metode_pembayaran = new MetodePembayaran();
        return view('admin.metode.metode_pembayaran', ['metode_pembayaran' => $metode_pembayaran->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // menampilkan seluruh data metode produk
        $metode_pembayaran = MetodePembayaran::all();
        return view('admin.metode.add_metode', compact('metode_pembayaran'));
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

        $metode_pembayaran = new MetodePembayaran();
        $metode_pembayaran->nama_metode = $request->nama_metode;

        $metode_pembayaran->save();
        return redirect('admin/metodepembayaran');
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
        DB::table('metode_pembayaran')->where('id', $id)->delete();
        return redirect('admin/metodepembayaran');
    }
}
