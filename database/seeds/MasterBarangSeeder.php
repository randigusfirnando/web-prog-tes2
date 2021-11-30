<?php

use Illuminate\Database\Seeder;
use App\Master_barang;

class MasterBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 7; $i++) {
                Master_barang::create([
                    'kode_barang' => ' K - ' . $i,
                    'nama_barang' => ' Nama Barang ' . $i,
                    'harga_jual' => '150000',
                    'harga_beli' => '100000',
                    'stok' => '10',
                    'kategori' => 'ATK',
                ]);
        }

        for ($i = 8; $i <= 10; $i++) {
            Master_barang::create([
                'kode_barang' => ' K - ' . $i,
                'nama_barang' => ' Nama Barang ' . $i,
                'harga_jual' => '250000',
                'harga_beli' => '150000',
                'stok' => '7',
                'kategori' => 'NON ATK',
            ]);
        }
    }
}
