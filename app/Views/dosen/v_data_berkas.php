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
                        <th>Berkas</th>
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

                                <a href="<?= base_url('dokumen/' . $value['file_berita_acara']) ?>" target="_blank" class="btn btn-flat btn-xs btn-success <?= $value['status_file_berita_acara'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> Berita Acara</a>
                                <a href="<?= base_url('dokumen/' . $value['file_undangan']) ?>" target="_blank" class="btn btn-flat btn-xs btn-primary <?= $value['status_file_undangan'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> Undangan</a>
                                <a href="<?= base_url('dokumen/' . $value['file_surat_tugas']) ?>" target="_blank" class="btn btn-flat btn-xs btn-info <?= $value['status_file_surat_tugas'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> Surat Tugas</a>
                                <a href="<?= base_url('dokumen/' . $value['file_surat_tugas_penguji']) ?>" target="_blank" class="btn btn-flat btn-xs btn-danger <?= $value['status_file_surat_tugas_penguji'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> Surat Tugas Penguji</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <?php $no = 1;
                    foreach ($mhs2 as $key => $mhs) {                     ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $mhs['npm'] ?></td>
                            <td><?= $mhs['nama_mahasiswa'] ?></td>
                            <td><?= $mhs['nama_prodi'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('DashboardDosen/cetakSuratTugas2/' . $mhs['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-xs btn-info"><i class="fas fa-print"></i> Cetak Surat Tugas</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>



<script>
    $(function() {
        $("#example1").DataTable({
            "paging": true,
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>