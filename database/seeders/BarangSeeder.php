<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'LTP001',
                'barang_nama' => 'Laptop Lenovo',
                'harga_beli' => 8500000,
                'harga_jual' => 10000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'SPH001',
                'barang_nama' => 'Smartpone Oppo',
                'harga_beli' => 2500000,
                'harga_jual' => 4000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'CLN001',
                'barang_nama' => 'Celana Uniqlo',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BJU001',
                'barang_nama' => 'Baju Gucci',
                'harga_beli' => 1000000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BSK001',
                'barang_nama' => 'Biskuit Nabati',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'PRM001',
                'barang_nama' => 'Permen Yuppy',
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'OBG001',
                'barang_nama' => 'Obeng Plus',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'KNC001',
                'barang_nama' => 'Kunci Inggris',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'KRS001',
                'barang_nama' => 'Kursi Kantor',
                'harga_beli' => 300000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'MJA001',
                'barang_nama' => 'Meja Makan',
                'harga_beli' => 250000,
                'harga_jual' => 400000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
