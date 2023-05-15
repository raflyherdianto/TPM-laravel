@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Kategori Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form action="/kategori" method="post" class="row g-3 mt-2" enctype="multipart/form-data">
            @csrf
                <div class="col-md-6">
                    <label for="kode_kategori" class="form-label fs-5">Kode Kategori</label>
                    <input type="text" class="form-control" id="kode_kategori" name="kode_kategori">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label fs-5">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                {{-- <div class="col-md-6">
                    <label for="gambar" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                  </div> --}}

                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Tambah</button>
                </div>
            </form>
        </div>
    </main>
    @endsection
