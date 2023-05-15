@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Gambar Kategori Barang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <div class="row justify-content-start">
                <div class="col-5">
                    <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/gambar/create">Tambah Data</a>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Gambar Kategori
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Kode Gambar</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kode Gambar</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gambars as $gambar)
                            <tr>
                                <td>{{ $gambar->kode_gambar }}</td>
                                <td>{{ $gambar->nama }}</td>
                                <td>{{ $gambar->kategori->nama }}</td>
                                <td><img width="100" src="{{ asset('storage/' . $gambar->gambar) }}"></td>
                                <td>
                                    <form action="/dashboard/gambar/{{ $gambar->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                    <span>
                                            <a href="/dashboard/gambar/{{ $gambar->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    </span>
                                </td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @endsection
