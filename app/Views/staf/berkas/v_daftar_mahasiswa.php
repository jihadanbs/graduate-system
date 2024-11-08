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
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }

            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('delete');
                echo '</div>';
            }

            ?>
            <p class="text-danger"><?= isset($error['file_berita_acara']) == isset($error['file_berita_acara']) ? validation_show_error('file_berita_acara') : '' ?></p>
            <p class="text-danger"><?= isset($error['file_undangan']) == isset($error['file_undangan']) ? validation_show_error('file_undangan') : '' ?></p>
            <p class="text-danger"><?= isset($error['file_surat_tugas']) == isset($error['file_surat_tugas']) ? validation_show_error('file_surat_tugas') : '' ?></p>
            <table id="example1" class="table table-sm table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Berkas</th>
                        <th></th>
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
                                <a href="<?= base_url('dokumen/' . $value['file_skl']) ?>" target="_blank" class="btn btn-flat btn-xs btn-warning <?= $value['status_file_skl'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> SKL</a>
                                <a href="<?= base_url('dokumen/' . $value['file_surat_tugas_penguji']) ?>" target="_blank" class="btn btn-flat btn-xs btn-danger <?= $value['status_file_surat_tugas_penguji'] == 0 ? 'disabled' : '' ?>"><i class="fas fa-print"></i> Surat Tugas Penguji</a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-flat btn-sm">Upload</button>
                                    <button type="button" class="btn btn-info btn-flat btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#upload1<?= $value['id_mahasiswa'] ?>">Berita Acara</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#upload2<?= $value['id_mahasiswa'] ?>">Undangan</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#upload3<?= $value['id_mahasiswa'] ?>">Surat Tugas</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#upload4<?= $value['id_mahasiswa'] ?>">SKL</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#upload5<?= $value['id_mahasiswa'] ?>">Surat Tugas Penguji</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- Modal Berita upload Acara -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="upload1<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value['nama_mahasiswa'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('Berkas/uploadBeritaAcara/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File Berita Acara</label>
                        <input type="file" name="file_berita_acara" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- Modal upload undangan -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="upload2<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value['nama_mahasiswa'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('Berkas/uploadUndangan/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File Undangan</label>
                        <input type="file" name="file_undangan" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- Modal upload Surat Tugas -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="upload3<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value['nama_mahasiswa'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('Berkas/uploadSuratTugas/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File Surat Tugas</label>
                        <input type="file" name="file_surat_tugas" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- Modal upload SKL -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="upload4<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value['nama_mahasiswa'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('Berkas/uploadSkl/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File SKL</label>
                        <input type="file" name="file_skl" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- Modal upload SKL -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="upload5<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value['nama_mahasiswa'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('Berkas/uploadSTP/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File Surat Tugas Penguji</label>
                        <input type="file" name="file_surat_tugas_penguji" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>



<script>
    $(function() {
        $("#example1").DataTable({
            "paging": true,
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>