<?php include 'Header-Tuburan.php'; ?>

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Tawag sa mga Kaslonon</h1>
              <p class="mb-0">This is a list of couples who have scheduled their wedding at Our Lady of Lourdes Parish.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Tuburan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/tuburan/tawagSaMgaKaslonon.png" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Tawag sa mga Kaslonon</h2>

                <h3>Unang Tawag</h3>

                  <p>•	<b>SERLIX DAVE T. DUMADAG</b> - 27 years old, San Isidro District, tagbilaran City (David Dumadag & Teresita Torremocha) <b>JANIS MIA C. REMOLADOR</b>- 28 years old, Pob. 2 Tagbilaran City (Roland Remolador and Leonida M. Caballo). </p>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

<?php include 'Footer.php'; ?>