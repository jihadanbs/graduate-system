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
            <table class="table table-sm table-bordered">
                <tr class="text-center">
                    <th width="50px">NO</th>
                    <th>Nama Tendik</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                foreach ($tendik as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-center"><?= $value['nama_tendik'] ?></td>
                        <td><?= $value['username'] ?></td>
                        <td><?= $value['password'] ?></td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_tendik'] ?>">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <a href="<?= base_url('Dosen/deleteData/' . $value['id_tendik']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data..?')" class="btn btn-danger btn-xs">
                                <i class="fas fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                <?php } ?>
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
            <?= form_open('Tendik/insertData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Tendik</label>
                    <input name="nama_tendik" class="form-control" placeholder="Nama Tendik" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control" placeholder="password" required>
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
foreach ($tendik as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_tendik'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('Tendik/updateData/' . $value['id_tendik']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Tendik</label>
                        <input name="nama_tendik" value="<?= $value['nama_tendik'] ?>" class="form-control" placeholder="Nama Tendik" required>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" value="<?= $value['username'] ?>" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" value="<?= $value['password'] ?>" class="form-control" placeholder="password" required>
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