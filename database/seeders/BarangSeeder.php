<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Kamera Nikon Z6',
                    'fotoBarang' => 'img2.jpg',
                    'harga' => '50000000',
                    'stok' => '10',
                    'ukuran' => '12',
                    'reviewBarang' => '100% Camera Aman Fokus Bokeh',
                ],
                [
                    'namaBarang' => 'Macbook Pro',
                    'fotoBarang' => 'img1.jpg',
                    'harga' => '30000000',
                    'stok' => '5',
                    'ukuran' => '13inci',
                    'reviewBarang' => 'Barang Bagus Dan Awet Kualitas Mantap 100% Barang Asli',   
                ],
                [
                    'namaBarang' => 'Kamera Sony A7 Mark III',
                    'fotoBarang' => 'img3.jpg',
                    'harga' => '40000000',
                    'stok' => '5',
                    'ukuran' => '12',
                    'reviewBarang' => 'Camera Videography Kualitas Bagus',  
                ],
            ]
        );
    }
}
