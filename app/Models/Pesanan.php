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

    protected $primarykey = 'id';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'tgl_pesanan',
        'deskripsi',
        'id_pembayaran'
    ];

    public function metode_pembayaran(){
        return $this->belongsTo(MetodePembayaran::class);
    }
    public function pesananitem(){
        return $this->hasMany(PesananItem::class);
    }

    public function getAllData(){
        $alldata = DB::table('pesanan')
        ->join('metode_pembayaran', 'pesanan.id_metode_pembayaran', '=', 'metode_pembayaran.id')
        ->select('pesanan.*', 'metode_pembayaran.nama_metode as nama_metode')
        ->get();
        return $alldata;
    }

    // CHART TOTAL PESANAN
    public function scopeByYear($query, $year)
    {
        return $query->whereYear('created_at', $year);
    }
}
