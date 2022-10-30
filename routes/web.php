<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    return view('welcome');
 });

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/artikel',[ArtikelController::class, 'berita']);
Route::get('/jenisArtikel/{kode}',[ArtikelController::class, 'jenis']);
Route::get('/halaman/{id}',[ArtikelController::class, 'halaman']);


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Faqihul Muqoddam",
        "image" => "\img\profile.jpg",
        "email" => "muqoddam2711@gmail.com",
        "alamat" => "Banyuwangi"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul",
            "author" => "Sambo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptatum assumenda quas eligendi eveniet nihil explicabo, asperiores obcaecati molestias aliquid, voluptas perferendis, tenetur voluptate magnam blanditiis adipisci velit possimus nemo."
        ],
        [
            "title" => "Judul",
            "author" => "Sambo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptatum assumenda quas eligendi eveniet nihil explicabo, asperiores obcaecati molestias aliquid, voluptas perferendis, tenetur voluptate magnam blanditiis adipisci velit possimus nemo."
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('daftar_barang', [BarangController::class, 'daftarBarang'])->name('daftarBarang.view');
Route::get('review_Barang/{id}', [BarangController::class, 'reviewBarang'])->name('reviewBarang.view');
