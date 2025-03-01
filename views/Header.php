<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Our Lady Of Lourdes Parish - Tagbilaran City, Bohol</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>

  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/316d4ee24e.js" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link href="assets/png/kofc_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style.scss" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(038) 412-2413</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.facebook.com/ollpymkofc" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="index.php?m=login" class="login"><i class="bi bi-door-open-fill"></i> Login</a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Our Lady Of Lourdes Parish</h1>
        </a>

        <?php include 'Menu.php'; ?>

      </div>

    </div>

  </header>

  <main class="main">
    <!-- The main content will be included here -->
  </main>

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
