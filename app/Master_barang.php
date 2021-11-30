<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_barang extends Model
{
    protected $table = 'master_barang';
    protected $fillable = ['id'];

    public function detail_penjualan()
    {
        return $this->hasMany('App\Detail_penjualan');
    }

    public function ScopeJumlahbarang()
    {
        return Master_barang::select('kategori', \DB::raw('SUM(stok) as total'))
            ->groupBy('kategori')
            ->get();
    }

    public function ScopeKategori()
    {
        return Master_barang::select('kategori')
            ->groupBy('kategori')
            ->get();
    }

}
