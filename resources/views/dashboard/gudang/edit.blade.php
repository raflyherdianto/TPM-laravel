@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Gudang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form action="/dashboard/gudang/{{ $gudang->id }}" method="post" class="row g-3 mt-2">
            @method('put')
            @csrf
                <div class="col-md-6">
                    <label for="kode_gudang" class="form-label fs-5">Kode Gudang</label>
                    <input type="text" class="form-control" readonly id="kode_gudang" name="kode_gudang" value="{{ old('kode_gudang', $gudang->kode_gudang) }}">
                </div>
                <div class="col-md-6">
                    <label for="barang_id" class="form-label fs-5">Data Barang</label>
                    <select id="barang_id" class="form-select" name="barang_id">
                    <option selected>Pilih...</option>
                    @foreach ($barangs as $barang)
                    @if (old('barang_id', $barang->id)==$gudang->barang_id)
                    <option selected value="{{ $barang->id }}">{{ $barang->nama }},{{ $barang->tebal_mm }},{{ $barang->ukuran_mm }}</option>
                    @else
                    <option value="{{ $barang->id }}">{{ $barang->nama }},{{ $barang->tebal_mm }},{{ $barang->ukuran_mm }}</option>
                    @endif

                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label fs-5">Stok</label>
                    <input type="text" readonly class="form-control" id="stok" name="stok" value="{{ old('stok', $gudang->stok) }}">
                </div>
                <div class="col-md-6">
                    <label for="barang_masuk" class="form-label fs-5">Barang Masuk</label>
                    <input type="text" class="form-control" id="barang_masuk" name="barang_masuk">
                </div>
                <div class="col-md-6">
                    <label for="barang_keluar" class="form-label fs-5">Barang Keluar</label>
                    <input type="text" class="form-control" id="barang_keluar" name="barang_keluar">
                </div>
                {{-- <div class="col-md-6">
                    <label for="kategori_id" class="form-label fs-5">Kategori</label>
                    <select id="kategori_id" class="form-select" name="kategori_id">
                    <option selected>Pilih...</option>
                    @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                    </select>
                </div> --}}
                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Tambah</button>
                </div>
            </form>
        </div>
    </main>
    @endsection
