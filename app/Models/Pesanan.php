<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public $timestamps = false;
    protected $primarykey = 'id_pesanan';

    protected $fillable = [
        'nama_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'id_metode_pembayaran'
    ];

    public function produk(){
        return $this->belongTo(Produk::class);
    }
    public function pesananitem(){
        return $this->hasMany(PesananItem::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}
