<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('artikel')->insert([
            [
                'kode_jenis_artikel'=>'OR',
                'judul'=>'olah raga',
                'isi'=>'Jangan Buang Buang Energi Kalian, Kalian Pasti Kalah Kok'
            ],
            [
                'kode_jenis_artikel'=>'PL',
                'judul'=>'politik',
                'isi'=>'Jangan Buang Buang Energi Kalian, Kalian Pasti Kalah Kok'
            ]
        ]);
        
    }
}
