<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 10000000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 4000000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 150000,
                'jumlah' => 1,
            ],            
            //2
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 1,
                'harga' => 20000000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 8000000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 3,
                'harga' => 300000,
                'jumlah' => 2,
            ],   
            //3         
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 1,
                'harga' => 300000000,
                'jumlah' => 3,
            ],            
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 2,
                'harga' => 12000000,
                'jumlah' => 3,
            ],            
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 450000,
                'jumlah' => 3,
            ],        
            //4    
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 1200000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 5,
                'harga' => 10000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 6,
                'harga' => 2000,
                'jumlah' => 1,
            ],       
            //5        
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 2400000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 20000,
                'jumlah' => 2,
            ],      
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 6,
                'harga' => 4000,
                'jumlah' => 2,
            ],            
            //6      
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 4,
                'harga' => 3600000,
                'jumlah' => 3,
            ],    
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 5,
                'harga' => 30000,
                'jumlah' => 3,
            ],            
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 6000,
                'jumlah' => 3,
            ],            
            //7     
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 25000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 8,
                'harga' => 40000,
                'jumlah' => 1,
            ],         
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 500000,
                'jumlah' => 1,
            ],            
            //8
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 7,
                'harga' => 50000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 80000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => 1000000,
                'jumlah' => 2,
            ],            
            //9   
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 75000,
                'jumlah' => 3,
            ],            
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 8,
                'harga' => 120000,
                'jumlah' => 3,
            ],            
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 1500000,
                'jumlah' => 3,
            ],            
            //10
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 400000,
                'jumlah' => 1,
            ],            
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 800000,
                'jumlah' => 2,
            ],            
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 1200000,
                'jumlah' => 3,
            ],            
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
