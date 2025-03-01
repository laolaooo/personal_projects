</main>

<footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Our Lady of Lourdes Parish</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/ollpymkofc" target="_blank"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php#hero">Home</a></li>
            <li><a href="index.php#about">About us</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Celestino Gallares Street</p>
          <p>Tagbilaran City, Bohol 6300</p>
          <p>Philippines</p>
          <p class="mt-4"><strong>Phone:</strong> <span>(038) 412-2413</span></p>
          <p><strong>Email:</strong> <span>ourladyoflourdes710@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Impact</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="assets/js/main.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const heroSection = document.getElementById('hero');
      const sitename = document.querySelector('.sitename');

      if (heroSection && sitename) {
        sitename.style.transition = 'opacity 0.5s ease-in-out';
        sitename.style.opacity = '0';

        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.intersectionRatio > 0.85) {
              sitename.style.opacity = '0';
            } else {
              sitename.style.opacity = '1';
            }
          });
        }, { threshold: [0.85] });

        observer.observe(heroSection);
      }
    });
  </script>

</body>
</html>