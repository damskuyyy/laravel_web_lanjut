<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => ModelsBarang::all()
        ];
        return view('barang.daftarbarang', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = ModelsBarang::Find($id);
        return view('barang.reviewbarang', compact('reviewBarang'));
    }
}
