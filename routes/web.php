<?php

use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriController;

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

Route::resource('/dashboard/gudang', GudangController::class)->middleware('auth');

Route::resource('/dashboard/barang', BarangController::class)->middleware('auth');

Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');

Route::get('/dashboard', function (User $user) {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        // 'categories' => Category::latest()->get()
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/gambar', GambarController::class)->middleware('auth');

Route::get('/home/product-details/{kategori:nama}', [HomeController::class, 'show']);

Route::get('/', function () {
    return view('homepage.index',[
        'title'=> 'Tiga Putra Mandiri',
        'barangs'=>Barang::whereNotNull('gambar')->get(),
        'kategoris'=>Kategori::all(),
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });
