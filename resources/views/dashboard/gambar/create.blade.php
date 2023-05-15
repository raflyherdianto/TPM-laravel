@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Gambar Kategori Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form action="/dashboard/gambar" method="post" class="row g-3 mt-2">
            @csrf
                <div class="col-md-6">
                    <label for="kode_gambar" class="form-label fs-5">Kode Gambar</label>
                    <input type="text" class="form-control" id="kode_gambar" name="kode_gambar">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label fs-5">Nama Gambar</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-md-6">
                    <label for="kategori_id" class="form-label fs-5">Kategori</label>
                    <select id="kategori_id" class="form-select" name="kategori_id">
                    <option selected>Pilih...</option>
                    @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="gambar" class="form-label fs-5">Upload Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control" type="file" id="gambar" name="gambar"
                    onchange="previewImage()">
                </div>
                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Tambah</button>
                </div>
            </form>
        </div>
    </main>

    <script>
        function previewImage(){
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    @endsection
