<div class="col-md-12">
    <div class="card card-primary card-outline shadow-lg">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <div class="card-tools">
                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
            </div>
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
            <table id="example1" class="table table-sm table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th>NPM</th>
                        <th>Nama Dosen</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $value['npm'] ?></td>
                            <td><?= $value['nama_mahasiswa'] ?></td>
                            <td><?= $value['nama_prodi'] ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_mahasiswa'] ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <a href="<?= base_url('Mahasiswa/deleteData/' . $value['id_mahasiswa']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data..?')" class="btn btn-danger btn-xs">
                                    <i class="fas fa-trash"></i>
                                </a>

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


<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah <?= $judul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Mahasiswa/insertData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>NPM</label>
                    <input name="npm" class="form-control" placeholder="NPM" required>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" required>
                </div>
                <div class="form-group">
                    <label>Program Studi</label>
                    <select name="id_prodi" class="form-control">
                        <option value="">--Pilih Prodi--</option>
                        <?php foreach ($prodi as $key => $value) { ?>
                            <option value="<?= $value['id_prodi'] ?>"><?= $value['nama_prodi'] ?></option>
                        <?php } ?>
                    </select>
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

<!-- modal edit -->
<?php $no = 1;
foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('Mahasiswa/updateData/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NPM</label>
                        <input name="npm" value="<?= $value['npm'] ?>" class="form-control" placeholder="NPM" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" value="<?= $value['nama_mahasiswa'] ?>" class="form-control" placeholder="Nama Mahasiswa" required>
                    </div>

                    <div class="form-group">
                        <label>Program Studi</label>
                        <select name="id_prodi" class="form-control">
                            <option value="">--Pilih Prodi--</option>
                            <?php foreach ($prodi as $key => $p) { ?>
                                <option value="<?= $p['id_prodi'] ?>" <?= $p['id_prodi'] == $value['id_prodi'] ? 'selected' : '' ?>><?= $p['nama_prodi'] ?></option>
                            <?php } ?>
                        </select>
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
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>