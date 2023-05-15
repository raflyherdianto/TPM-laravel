@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form class="row g-3 mt-2" action="/dashboard/barang/{{ $barang->id }}" method="POST"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col-12">
                    <label for="nama" class="form-label fs-5">Kode Barang</label>
                    <input class="form-control" type="text" value="{{ old('kode_barang', $barang->kode_barang) }}" name="kode_barang"  aria-label="readonly input example" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label fs-5">Ubah Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $barang->nama) }}">
                </div>
                <div class="col-md-6">
                    <label for="tebal_mm" class="form-label fs-5">Ubah Tebal (mm)</label>
                    <input type="text" class="form-control" id="tebal_mm" name="tebal_mm" value="{{ old('tebal_mm', $barang->tebal_mm) }}">
                </div>
                <div class="col-md-6">
                    <label for="grade" class="form-label fs-5">Ubah Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade', $barang->grade) }}">
                </div>
                <div class="col-md-6">
                    <label for="ukuran_mm" class="form-label fs-5">Ubah Ukuran (mm)</label>
                    <input type="text" class="form-control" id="ukuran_mm" name="ukuran_mm" value="{{ old('ukuran_mm', $barang->ukuran_mm) }}">
                </div>
                <div class="col-md-6">
                    <label for="kategori_id" class="form-label fs-5">Ubah Kategori</label>
                    <select id="kategori_id" class="form-select" name="kategori_id">
                    <option selected>Pilih...</option>
                    @foreach ($kategoris as $kategori)
                    @if (old('kategori_id', $kategori->id)==$barang->kategori_id)
                    <option selected value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @else
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                {{-- <div class="col-md-6">
                    <label for="qty" class="form-label fs-5">Ubah Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty" value="{{ old('qty', $barang->qty) }}">
                </div> --}}
                <div class="col-md-6">
                    <label for="berat_item_kg" class="form-label fs-5">Ubah Berat Item (kg)</label>
                    <input type="text" class="form-control" id="berat_item_kg" name="berat_item_kg" value="{{ old('berat_item_kg', $barang->berat_item_kg) }}">
                </div>
                <div class="col-md-6">
                    <label for="harga" class="form-label fs-5">Ubah Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga', $barang->harga) }}">
                </div>
                <div class="col-md-6">
                    <label for="gambar" class="form-label fs-5">Ubah Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $barang->gambar }}">
                    @if ($barang->gambar)
                        <img src="{{ asset('storage/' . $barang->gambar ) }}" class="img-preview mb-3 img-fluid col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control" type="file" id="gambar" name="gambar"
                    onchange="previewImage()">
                </div>
                <div class="col-12 mt-4 mb-3 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Ubah</button>
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
