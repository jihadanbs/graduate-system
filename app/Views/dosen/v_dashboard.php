<div class="col-sm-12">
    <div class="alert alert-primary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Selamat Datang <?= session()->get('nama_dosen') ?></h5>
    </div>
</div>
<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $total_surat_tugas1 + $total_surat_tugas2 ?></h3>

            <p>Surat Tugas</p>
        </div>
        <div class="icon">
            <i class="fas fa-file-alt"></i>
        </div>
        <a href="<?= base_url('DashboardDosen/suratTugas') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $total_surat_undangan ?></h3>

            <p>Surat Undangan</p>
        </div>
        <div class="icon">
            <i class="fas fa-file-alt"></i>
        </div>
        <a href="<?= base_url('DashboardDosen/suratUndangan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $total_berita_acara ?></h3>

            <p>Berita Acara</p>
        </div>
        <div class="icon">
            <i class="fas fa-file-alt"></i>
        </div>
        <a href="<?= base_url('DashboardDosen/beritaAcara') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->