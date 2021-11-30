<?php

use Illuminate\Database\Seeder;
use App\Penjualan;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Penjualan::create([
                'tgl_penjualan' => now(),
                'nama_konsumen' => ' Konsumen - ' . $i,
                'alamat' => ' Alamat ke -' . $i,
            ]);
        }
    }
}
