<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\KategoriProduk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

        // total user berdasarkan role
        // $adminCount = User::byRole('admin')->count();
        $userCount = User::byRole('user')->count();
        // $managerCount = User::byRole('manager')->count();

        // CHART TOTAL PESANAN
        $currentYear = Carbon::now()->year;

        $orders = DB::table('pesanan')
            ->selectRaw('MONTH(tgl_pesanan) AS month, COUNT(*) AS total_pesanan')
            ->whereYear('tgl_pesanan', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        // dd($orders);

        $chartData = [];
        $months = [];


        foreach ($orders as $order) {
            $chartData[] = $order->total_pesanan;
            $months[] = Carbon::create()->month($order->month)->format('F');
        }


        return view('admin.dashboard')->with([
            'countProduk' => $cproduk,
            'countKategori' => $ckategori,
            'countPesanan' => $cpesanan,
            'countUser' => $userCount,
            'chartData' => $chartData,
            'months' => $months
        ]);
    }

    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
}
