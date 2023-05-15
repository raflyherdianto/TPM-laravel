<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Kategori $kategori)
    {
        return view('homepage.details', [
            'title' => 'Product Details',
            'kategoris' => Kategori::all(),
            'kategori' => $kategori,
            'gambars' => Gambar::where('kategori_id', $kategori->id)->get(),
            'barangs' => Barang::where('kategori_id', $kategori->id)->get(),
        ]);
    }
}
