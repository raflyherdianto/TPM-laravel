<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Our Products</h2>
            <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($kategoris as $category)
                        <li data-filter=".filter-{{ $category->id }}">{{ $category->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($barangs as $barang)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $barang->kategori->id }}">
                @if ($barang->gambar)
                <img src="{{ asset('storage/' . $barang->gambar) }}" class="img-fluid" alt="">
                @else
                    <img src="/img/portfolio/{{ $barang->kode_barang }}.jpg" class="img-fluid" alt="">
                @endif

                <div class="portfolio-info">
                    <h4>{{ $barang->nama }}</h4>
                    <a href="/img/portfolio/{{ $barang->kode_barang }}.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title=""><i class="bi bi-zoom-in"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section><!-- End Portfolio Section -->
