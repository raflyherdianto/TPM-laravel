@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Gudang</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <div class="row justify-content-start">
                <div class="col-5">
                    <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/gudang/create">Tambah Data</a>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Gudang
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Kode Gudang</th>
                                <th>Nama Barang</th>
                                <th>Tebal</th>
                                <th>Ukuran</th>
                                <th>Stok</th>
                                <th>Barang Masuk</th>
                                <th>Barang Keluar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kode Gudang</th>
                                <th>Nama Barang</th>
                                <th>Tebal</th>
                                <th>Ukuran</th>
                                <th>Stok</th>
                                <th>Barang Masuk</th>
                                <th>Barang Keluar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gudangs as $gudang)
                            <tr>
                                <td>{{ $gudang->kode_gudang }}</td>
                                <td>{{ $gudang->barang->nama }}</td>
                                <td>{{ $gudang->barang->tebal_mm }}</td>
                                <td>{{ $gudang->barang->ukuran_mm }}</td>
                                <td>{{ $gudang->stok }}</td>
                                <td>{{ $gudang->barang_masuk }}</td>
                                <td>{{ $gudang->barang_keluar }}</td>
                                <td>
                                    <span>
                                        <a href="/dashboard/gudang/{{ $gudang->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    </span>
                                    {{-- <form action="/gudang/{{ $gambar->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form> --}}
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
