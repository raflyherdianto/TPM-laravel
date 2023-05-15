@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Gambar Kategori</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <form class="row g-3 mt-2" action="/dashboard/gambar/{{ $gambar->id }}" method="POST"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col-12">
                    <label for="kode_gambar" class="form-label fs-5">Kode Gambar</label>
                    <input class="form-control" type="text" value="{{ old('kode_gambar', $gambar->kode_gambar) }}" name="kode_gambar"  aria-label="readonly input example" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label fs-5">Ubah Nama Gambar</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $gambar->nama) }}">
                </div>
                <div class="col-md-6">
                    <label for="kategori_id" class="form-label fs-5">Ubah Kategori</label>
                    <select id="kategori_id" class="form-select" name="kategori_id">
                    <option selected>Pilih...</option>
                    @foreach ($kategoris as $kategori)
                    @if (old('kategori_id', $kategori->id)==$gambar->kategori_id)
                    <option selected value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @else
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="gambar" class="form-label fs-5">Ubah Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $gambar->gambar }}">
                    @if ($gambar->gambar)
                        <img src="{{ asset('storage/' . $gambar->gambar ) }}" class="img-preview mb-3 img-fluid col-sm-5 d-block">
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
