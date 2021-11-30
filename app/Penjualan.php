<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id'];

    public function detail_penjualan()
    {
        return $this->hasMany('App\Detail_penjualan', 'id');
    }

    // public function getTglPenjualanAttribute($value)
    // {

    // }

    public function ScopeTglPenjualan()
    {
        return Penjualan::select('tgl_penjualan')
            ->groupBy('tgl_penjualan')
            ->get();
    }

    public function ScopePendapatan()
    {
        return Penjualan::
            leftJoin('detail_penjualan', 'penjualan.id', '=', 'detail_penjualan.id_penjualan')
            ->select('penjualan.tgl_penjualan', \DB::raw('SUM(detail_penjualan.harga_total) as total'))
            ->groupBy('penjualan.tgl_penjualan')
            ->get();
    }

}
