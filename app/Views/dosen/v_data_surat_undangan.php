<div class="col-md-12">
    <div class="card card-primary card-outline shadow-lg">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <!-- <div class="card-tools">
                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
            </div> -->
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <table id="example1" class="table table-sm table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs as $key => $value) {                     ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $value['npm'] ?></td>
                            <td><?= $value['nama_mahasiswa'] ?></td>
                            <td><?= $value['nama_prodi'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('DashboardDosen/cetakSuratUndangan/' . $value['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-xs btn-info"><i class="fas fa-print"></i> Cetak Surat Undangan</a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>

        </div>
    </div>
</div>