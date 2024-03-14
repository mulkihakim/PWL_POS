<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Agus',
                'penjualan_kode' => 'PK001',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Joni',
                'penjualan_kode' => 'PK002',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Bibo',
                'penjualan_kode' => 'PK003',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Candra',
                'penjualan_kode' => 'PK004',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Lukman',
                'penjualan_kode' => 'PK005',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Kaka',
                'penjualan_kode' => 'PK006',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Candra',
                'penjualan_kode' => 'PK007',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PK008',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Yandi',
                'penjualan_kode' => 'PK009',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Fadil',
                'penjualan_kode' => 'PK010',
                'penjualan_tanggal' => '2024-02-29',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
