@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form class="row g-3" action="/dashboard/barang" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label fs-5">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label fs-5">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-md-6">
                    <label for="tebal_mm" class="form-label fs-5">Tebal (mm)</label>
                    <input type="text" class="form-control" id="tebal_mm" name="tebal_mm">
                </div>
                <div class="col-md-6">
                    <label for="grade" class="form-label fs-5">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade">
                </div>
                <div class="col-md-6">
                    <label for="ukuran_mm" class="form-label fs-5">Ukuran (mm)</label>
                    <input type="text" class="form-control" id="ukuran_mm" name="ukuran_mm">
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
                {{-- <div class="col-md-6">
                    <label for="qty" class="form-label fs-5">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty">
                </div> --}}
                <div class="col-md-6">
                    <label for="berat_item_kg" class="form-label fs-5">Berat Item (kg)</label>
                    <input type="text" class="form-control" id="berat_item_kg" name="berat_item_kg">
                </div>
                <div class="col-md-6">
                    <label for="harga" class="form-label fs-5">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="col-md-6">
                    <label for="gambar" class="form-label fs-5">Upload Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control" type="file" id="gambar" name="gambar"
                    onchange="previewImage()">
                </div>
                <div class="col-12 mb-3 mt-4 text-center">
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
