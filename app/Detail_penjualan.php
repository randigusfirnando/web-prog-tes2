<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_penjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $guarded = ['id'];

    public function master_barang()
    {
        return $this->belongsTo('App\Master_barang', 'kode_barang', 'kode_barang');
    }

    public function penjualan()
    {
        return $this->belongsTo('App\Penjualan', 'id_penjualan', 'id');
    }
}
