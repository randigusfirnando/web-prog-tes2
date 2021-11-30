<?php

use Illuminate\Database\Seeder;
use App\Detail_penjualan;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Detail_penjualan::create([
                'id_penjualan' => $i,
                'kode_barang' => ' K - ' . $i,
                'jumlah' => 3,
                'harga_satuan' => 150000,
                'harga_total' => 3*150000,
            ]);
        }
    }
}
