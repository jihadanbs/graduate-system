<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i> Mohon Lengkapi Persyaratan Dibawah Ini Sebelum Download SKL </h5>
            </div>
            <p class="text-danger"><?= isset($error['file_artikel']) == isset($error['file_artikel']) ? validation_show_error('file_artikel') : '' ?></p>
            <p class="text-danger"><?= isset($error['file_pengesahan']) == isset($error['file_artikel']) ? validation_show_error('file_pengesahan') : '' ?></p>
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }

            ?>
            <table class="table table-bordered">
                <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Berkas</th>
                    <th>File</th>
                    <th width="150px">Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Artikel</td>
                    <td class="text-center">
                        <?php if ($mhs['status_file_artikel'] == 1) { ?>
                            <a href="<?= base_url('dokumen/' . $mhs['file_artikel']) ?>" target="_blank" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                        <?php } ?>
                    </td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#upload1"><i class="fas fa-upload"></i> Upload</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lembar Pengesahan</td>
                    <td class="text-center">
                        <?php if ($mhs['status_file_pengesahan'] == 1) { ?>
                            <a href="<?= base_url('dokumen/' . $mhs['file_pengesahan']) ?>" target="_blank" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                        <?php } ?>
                    </td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#upload2"><i class="fas fa-upload"></i> Upload</button></td>
                </tr>
            </table>

            <?php if ($mhs['status_file_artikel'] == 1 and $mhs['status_file_pengesahan'] == 1) { ?>
                <h3>Silahkan Download File SKL Dibawah Ini :</h3>
                <a href="<?= base_url('dokumen/' . $mhs['file_skl']) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> File SKL</a>
            <?php } ?>
        </div>
    </div>
</div>


<div class="modal fade" id="upload1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('DashboardMahasiswa/uploadArtikel/' . $mhs['id_mahasiswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Upload File Artikel</label>
                    <input type="file" name="file_artikel" class="form-control" required>
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

<div class="modal fade" id="upload2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('DashboardMahasiswa/uploadPengesahan/' . $mhs['id_mahasiswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Upload File Pengesahan</label>
                    <input type="file" name="file_pengesahan" class="form-control" required>
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