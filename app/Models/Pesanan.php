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
        'alamat',
        'tgl_pesanan',
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
        ->join('pesanan_item', 'pesanan.id_pesanan', '=', 'pesanan_item.pesanan_id')
        ->join('produk', 'pesanan_item.produk_id', '=', 'produk.id_produk')
        ->select('pesanan.*', 'produk.nama_produk as nama_produk', 'pesanan_item.qty as jumlah_pesanan')
        ->get();
        return $alldata;
    }

    // CHART TOTAL PESANAN
    public function scopeByYear($query, $year)
    {
        return $query->whereYear('created_at', $year);
    }
}
