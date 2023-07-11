<?php

namespace App\Http\Controllers;

use App\Models\PesananItem;
use App\Models\Produk;
use App\Models\Pesanan;
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
        return view('admin.pesanan_item.pesanan_item',['pesanan_item' => $pesanan_item->getAllData()] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $pesanan = Pesanan::all();

        $pesanan_item = PesananItem::all();
        return view('admin.pesanan_item.add_pesananitem', compact('produk', 'pesanan','pesanan_item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesanan_item = new PesananItem();
        $pesanan_item->qty = $request->qty;
        $pesanan_item->total = $request->total;
        $pesanan_item->produk_id = $request->produk_id;
        $pesanan_item->pesanan_id = $request->pesanan_id;

        $pesanan_item->save();
        return redirect('admin/pesanan_item');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->get();
        $pesanan_item = DB::table('pesanan_item')->where('id_pesananitem', $id)->get();
        return view('admin.produk.edit_pesananitem', compact('produk','pesanan','pesanan_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pesanan_item = PesananItem::find($request->id);
        $pesanan_item->qty = $request->qty;
        $pesanan_item->total = $request->total;
        $pesanan_item->produk_id = $request->produk_id;
        $pesanan_item->pesanan_id = $request->pesanan_id;

        $pesanan_item->save();
        return redirect('admin/pesanan_item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesanan_item')->where('id_pesananitem', $id)->delete();
        return redirect('admin/pesanan_item');
    }
}
