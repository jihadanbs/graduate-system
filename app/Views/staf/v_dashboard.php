<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $jumlahPendaftaranMasuk ?></h3>

            <p>Pendaftaran Masuk</p>
        </div>
        <div class="icon">
            <i class="fa fa-download"></i>
        </div>
        <a href="<?= base_url('DashboardStaf/pendaftaranMasuk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $jumlahMahasiswa ?></h3>

            <p>Mahasiswa</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="<?= base_url('Mahasiswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $jumlahWisudawan ?><sup style="font-size: 20px"></sup></h3>

            <p>Wisudawan</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-graduate"></i>
        </div>
        <a href="<?= base_url('DashboardStaf/calonWisudawan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->

<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3><?= $jumlahdosen ?></h3>

            <p>Dosen</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="<?= base_url('Dosen') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>