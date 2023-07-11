<?php

namespace App\Http\Controllers;

use App\Models\PesananItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananItemController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan_item = new PesananItem();
        return view('admin.pesanan_item.pesanan_item', ['pesanan_item' => $pesanan_item->getALLData()]);
    }

    /** 
     * Show the form for creating a new resource.
     */


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

        $pesanan_item = new PesananItem();
        $pesanan_item->qty            = $request->qty;
        $pesanan_item->total          = $request->total;
        $pesanan_item->produk_id      = $request->produk_id;
        $pesanan_item->pesanan_id     = $request->pesanan_id;

        $pesanan_item->save();
        return redirect('admin/pesanan_item');
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan_item = PesananItem::where('id_pesanan_item', $id)->first();
        $produk = DB::table('produk')->where('id_produk', $id)->get();
        return view('admin.pesanan_item.show', [
            'pesanan_item' => $pesanan_item, 
            'produk' => $produk]);
    }

    /** 
     * Show the form for editing the specified resource.
     */

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pesanan_item = PesananItem::where('id_pesanan_item', $request->id)->first();
        $pesanan_item->qty          = $request->qty;
        $pesanan_item->total        = $request->total;
        $pesanan_item->produk_id    = $request->produk_id;
        $pesanan_item->pesanan_id   = $request->pesanan_id;


        $pesanan_item->save();
        return redirect('admin/pesanan_item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tbale pesanan
        // cari data yang ingn di hapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('pesanan_item')->where('id_pesanan_item', $id)->delete();
        return redirect('admin/pesanan-item');
    }
}