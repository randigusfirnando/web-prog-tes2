<?php

namespace App\Http\Controllers;
use App\Detail_penjualan;
use App\Master_barang;
use App\Penjualan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $detail_penjualan = Detail_penjualan::all();

        $master_barang = Master_barang::Kategori();

        $bar_chart = Penjualan::TglPenjualan();

        $jumlah = Master_barang::JumlahBarang();

        // untuk bar chart
        $pendapatan = Penjualan::pendapatan();
        $pendapatan1 = Penjualan::all();


        return view('dashboard',
        compact('detail_penjualan',
                'master_barang',
                'bar_chart','jumlah',
                'pendapatan', 'pendapatan1'));
    }
}
