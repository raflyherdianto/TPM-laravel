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

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-3.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-4.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-5.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-6.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/portfolio/plywoodpd-7.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Plywood</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
              <ul>
                <li><strong>More information and details <a href="/info-plywood"><br>Click here</a></strong>
              </ul>
            </div>

            <div class="col-lg-12">
            <div class="portfolio-info d-grid gap-2">
              <button class="btn btn-success" type="button">READY STOCK</button>
              <button class="btn btn-danger" type="button">OUT OF STOCK</button>
            </div>
            <!-- <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div> -->
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  @include('homepage.layouts.footer')
