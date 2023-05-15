@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Kategori Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form class="row g-3 mt-2" action="/kategori/{{ $kategori->id }}" method="POST">
                @method('put')
                @csrf
                <div class="col-12">
                    <input class="form-control" type="text" value="{{ old('kode_kategori', $kategori->kode_kategori) }}" name="kode_kategori"  aria-label="readonly input example" readonly>
                </div>
                <div class="col-12">
                    <label for="nama" class="form-label fs-5">Ubah Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kategori->nama) }}">
                </div>
                <div class="col-md-6">
                    <label for="gambar" class="form-label">Ubah Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                  </div>
                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                </div>
            </form>
        </div>
    </main>
    @endsection
