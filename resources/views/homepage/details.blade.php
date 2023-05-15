@include('homepage.layouts.main')

@include('homepage.layouts.header')

<main id="main">

    @include('homepage.layouts.breadcrumbs')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($gambars as $gambar)
                                <div class="swiper-slide">
                                    @if ($gambar->gambar)
                                        <img src="{{ asset('storage/' . $gambar->gambar) }}" alt="">
                                    @else
                                        <img src="/img/portfolio/{{ $gambar->nama }}.jpg" alt="">
                                    @endif
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>{{ $kategori->nama }}</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $kategori->nama }}</li>
                            <li><strong>Project</strong>: Tiga Putra Mandiri</li>
                        </ul>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="portfolio-info d-grid gap-2">
                            <button class="btn btn-success" type="button">READY STOCK</button>
                            <button class="btn btn-danger" type="button">OUT OF STOCK</button>
                        </div>
                    </div> --}}
                </div>
            </div>

            <br><br>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            <h2>Stock</h2>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel Barang
                        </div>
                        <div class="card-body table-responsive">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tebal (mm)</th>
                                        <th>Grade</th>
                                        <th>Ukuran (mm)</th>
                                        <th>Berat Item (kg)</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tebal (mm)</th>
                                        <th>Grade</th>
                                        <th>Ukuran (mm)</th>
                                        <th>Berat Item (kg)</th>
                                        <th>Stok</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{ $barang->kode_barang }}</td>
                                        <td>{{ $barang->nama }}</td>
                                        <td>{{ $barang->tebal_mm }}</td>
                                        <td>{{ $barang->grade }}</td>
                                        <td>{{ $barang->ukuran_mm }}</td>
                                        <td>{{ $barang->berat_item_kg }}</td>
                                        <td>{{ $barang->stok }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@include('homepage.layouts.footer')
