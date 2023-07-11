<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = new Pembayaran();
        return view('admin.pembayaran.pembayaran', ['pembayaran' => $pembayaran->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesanan = Pesanan::all();
        
        $pembayaran = Pembayaran::all();
        return view('admin.pembayaran.add_pembayaran', compact('pesanan','pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembayaran = new Pembayaran();
        $pembayaran->tgl_pembayaran = $request->tgl_pembayaran;
        $pembayaran->jumlah_pembayaran = $request->jumlah_pembayaran;
        $pembayaran->pesanan_id = $request->pesanan_id;

        $pembayaran->save();
        return redirect('admin/pembayaran');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = DB::table('pesanan')->get();
        $pembayaran = DB::table('pembayaran')->where('id_pembayaran', $id)->get();
        return view('admin.pembayaran.edit_pembayaran', compact('pembayaran', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->tgl_pembayaran = $request->tgl_pembayaran;
        $pembayaran->jumlah_pembayaran = $request->jumlah_pembayaran;
        $pembayaran->pesanan_id = $request->pesanan_id;

        $pembayaran->save();
        return redirect('admin/pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pembayaran')->where('id_pembayaran', $id)->delete();
        return redirect('admin/pembayaran');
    }
}
