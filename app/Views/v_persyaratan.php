<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Persyaratan</li>
        </ol>
        <h2>Persyaratan Pendaftaran Wisuda</h2>
    </div>
</section><!-- End Breadcrumbs -->


<section id="features" class="features">

    <div class="container" data-aos="fade-up">
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