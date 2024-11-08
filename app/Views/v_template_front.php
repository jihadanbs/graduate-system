<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Graduate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('front') ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('front') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('front') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('front') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('front') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front') ?>/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- =======================================================
* Template Name: FlexStart
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?= base_url() ?>/graduate.png" alt="">
                <span>The Graduate</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Home</a></li>
                    <!-- <li><a class="nav-link scrollto" href="<?= base_url('Home/calonWisudawan') ?>">Calon Wisudawan</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/persyaratan') ?>">Persyaratan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url('Auth/Login') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php
    if ($page) {
        echo view($page);
    }
    ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?= base_url() ?>/graduate.png" alt="">
                            <span>The Graduate</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            <b>Universitas YARSI</b> <br>
                            Menara YARSI, Kav. 13, Jl. Let. Jend. Suprapto. Cempaka Putih, Jakarta Pusat, DKI Jakarta. Indonesia. 10510<br>
                            <strong>Phone:</strong> +62 (21) 4206675<br>
                            <strong>Email:</strong> registrar@yarsi.ac.id<br>
                            <strong>Fax :</strong> +62 (21) 4243171<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?= date('Y') ?></span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('front') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('front') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('front') ?>/assets/js/main.js"></script>

</body>

</html>