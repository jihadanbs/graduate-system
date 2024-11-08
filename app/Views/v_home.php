<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Pendaftaran Wisuda UNIVERSITAS HARAPAN</h1>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="<?= base_url('Auth/login') ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Daftar Wisuda</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url() ?>/3738337.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-4">
                    <div class="count-box">
                        <i class="bi bi-book"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlprodi ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Program Studi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="count-box">
                        <i class="bi bi-mortarboard" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlwisudawan ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Wisudawan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="count-box">
                        <i class="bi bi-mortarboard" style="color: #008000;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Alumni</p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Universitas HARAPAN</h2>
                <p>Persyaratan Pendaftaran Wisuda</p>
            </header>

            <div class="row">

                <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <?php foreach ($persyaratan as $key => $value) { ?>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3><?= $value['nama_persyaratan'] ?></h3>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            </div> <!-- / row -->


        </div>

    </section><!-- End Features Section -->

</main><!-- End #main -->