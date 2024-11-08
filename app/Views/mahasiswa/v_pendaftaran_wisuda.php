<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Pendaftaran Wisuda</h3>

            <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div> -->
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php if ($mhs['status_pendaftaran'] == 2) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Pendaftaran Anda Ditolak</h5>
                    <p>Catatan : <br> <?= $mhs['ctt'] ?> </p>
                </div>
            <?php  } ?>



            <?php

            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            }
            $error = validation_errors();

            ?>
            <?= form_open_multipart('Pendaftaran/updateDataPendaftaran/' . $mhs['npm']) ?>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <div class="form-group">
                        <label>Foto</label><br>
                        <img src="<?= base_url('foto/' . $mhs['foto']) ?>" id="gambar_load" width="150px" height="200" style="border: 4px; border-style: solid; border-color: #000;">
                        <input type="file" name="foto" id="preview_gambar" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NPM</label>
                                <input name="npm" value="<?= $mhs['npm'] ?>" class="form-control" placeholder="NPM" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input name="nik" value="<?= $mhs['nik'] ?>" class="form-control" placeholder="NIK" maxlength="16">
                                <p class="text-danger"><?= isset($error['nik']) == isset($error['nik']) ? validation_show_error('nik') : '' ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" value="<?= $mhs['nama_mahasiswa'] ?>" class="form-control" placeholder="Nama Mahasiswa">
                        <p class="text-danger"><?= isset($error['nama_mahasiswa']) == isset($error['nama_mahasiswa']) ? validation_show_error('nama_mahasiswa') : '' ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir" value="<?= $mhs['tempat_lahir'] ?>" class="form-control" placeholder="Tempat Lahir">
                                <p class="text-danger"><?= isset($error['tempat_lahir']) == isset($error['tempat_lahir']) ? validation_show_error('tempat_lahir') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" value="<?= $mhs['tgl_lahir'] ?>" class="form-control" placeholder="Tanggal lahir">
                                <p class="text-danger"><?= isset($error['tgl_lahir']) == isset($error['tgl_lahir']) ? validation_show_error('tgl_lahir') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="L" <?= $mhs['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="P" <?= $mhs['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                                <p class="text-danger"><?= isset($error['jenis_kelamin']) == isset($error['jenis_kelamin']) ? validation_show_error('jenis_kelamin') : '' ?></p>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" value="<?= $mhs['alamat'] ?>" class="form-control" placeholder="Alamat">
                        <p class="text-danger"><?= isset($error['alamat']) == isset($error['alamat']) ? validation_show_error('alamat') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $mhs['email'] ?>" class="form-control" placeholder="Email">
                                <p class="text-danger"><?= isset($error['email']) == isset($error['email']) ? validation_show_error('email') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Handphone</label>
                                <input name="no_hp" value="<?= $mhs['no_hp'] ?>" class="form-control" placeholder="Handphone">
                                <p class="text-danger"><?= isset($error['no_hp']) == isset($error['no_hp']) ? validation_show_error('no_hp') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Telpon</label>
                                <input name="no_telpon" value="<?= $mhs['no_telpon'] ?>" class="form-control" placeholder="Telpon">
                                <p class="text-danger"><?= isset($error['no_telpon']) == isset($error['no_telpon']) ? validation_show_error('no_telpon') : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Program Studi</label>
                                <select name="id_prodi" class="form-control">
                                    <?php foreach ($prodi as $key => $value) { ?>
                                        <option value="<?= $value['id_prodi'] ?>" <?= $mhs['id_prodi'] == $value['id_prodi'] ? 'selected' : '' ?>><?= $value['nama_prodi'] ?></option>
                                    <?php } ?>
                                </select>
                                <p class="text-danger"><?= isset($error['id_prodi']) == isset($error['id_prodi']) ? validation_show_error('id_prodi') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Total SKS</label>
                                <input type="number" value="<?= $mhs['total_sks'] ?>" name="total_sks" class="form-control" placeholder="Total SKS">
                                <p class="text-danger"><?= isset($error['total_sks']) == isset($error['total_sks']) ? validation_show_error('total_sks') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>IPK</label>
                                <input name="ipk" value="<?= $mhs['ipk'] ?>" class="form-control" placeholder="IPK">
                                <p class="text-danger"><?= isset($error['ipk']) == isset($error['ipk']) ? validation_show_error('ipk') : '' ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Judul Skripsi</label>
                        <input name="judul_skripsi" value="<?= $mhs['judul_skripsi'] ?>" class="form-control" placeholder="Total SKS">
                        <p class="text-danger"><?= isset($error['judul_skripsi']) == isset($error['judul_skripsi']) ? validation_show_error('judul_skripsi') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pembimbing Ilmu</label>
                                <select name="pembimbing_ilmu" class="form-control">
                                    <option value="">--Pilih Pembimbing--</option>
                                    <?php foreach ($dosen as $key => $value) { ?>
                                        <option value="<?= $value['nama_dosen'] ?>" <?= $value['nama_dosen'] == $mhs['pembimbing_ilmu']  ? 'selected' : '' ?>><?= $value['nama_dosen'] ?></option>
                                    <?php  } ?>
                                </select>
                                <p class="text-danger"><?= isset($error['pembimbing_ilmu']) == isset($error['pembimbing_ilmu']) ? validation_show_error('pembimbing_ilmu') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pembimbing Agama</label>
                                <select name="pembimbing_agama" class="form-control">
                                    <option value="">--Pilih Pembimbing--</option>
                                    <?php foreach ($dosen as $key => $value) { ?>
                                        <option value="<?= $value['nama_dosen'] ?>" <?= $value['nama_dosen'] == $mhs['pembimbing_agama']  ? 'selected' : '' ?>><?= $value['nama_dosen'] ?></option>
                                    <?php  } ?>
                                </select>
                                <p class="text-danger"><?= isset($error['pembimbing_agama']) == isset($error['pembimbing_agama']) ? validation_show_error('pembimbing_agama') : '' ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lulus</label>
                                <input type="date" name="tgl_lulus" value="<?= $mhs['tgl_lulus'] ?>" class="form-control" placeholder="Pembimbing 1">
                                <p class="text-danger"><?= isset($error['tgl_lulus']) == isset($error['tgl_lulus']) ? validation_show_error('tgl_lulus') : '' ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Wisuda</label>
                                <input type="date" name="tgl_wisuda" value="<?= $mhs['tgl_wisuda'] ?>" class="form-control" placeholder="Pembimbing 1">
                                <p class="text-danger"><?= isset($error['tgl_wisuda']) == isset($error['tgl_wisuda']) ? validation_show_error('tgl_wisuda') : '' ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary btn-flat">Simpan</button>
                    </div>
                </div>



            </div>

            <?= form_close() ?>
            <p class="text-danger"><?= isset($error['id_persyaratan']) == isset($error['id_persyaratan']) ? validation_show_error('id_persyaratan') : '' ?></p>
            <p class="text-danger"><?= isset($error['file_dokumen']) == isset($error['file_dokumen']) ? validation_show_error('file_dokumen') : '' ?></p>


            <table class=" table table-bordered table-sm">
                <tr class="text-center">
                    <th width=50px>NO</th>
                    <th>Dokumen</th>
                    <th width="100px"><button class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button></th>
                </tr>
                <?php $no = 1;
                foreach ($dokumen as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['nama_persyaratan'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('dokumen/' . $value['file_dokumen']) ?>" class="btn btn-xs btn-flat btn-success" target="_blank"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('Pendaftaran/deleteDokumen/' . $value['id_dokumen']) ?>" onclick="return confirm('Apakah Andan Yakin Hapus Dokumen.?')" class="btn btn-xs btn-flat btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <div class="form-group"><br>
                <button class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#kirim"><i class="fas fa-paper-plane"></i> Kirim Pendaftaran</button>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Dokumen Persyaratan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('Pendaftaran/uploadDokumen/' . $mhs['npm']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Jenis Dokumen</label>
                    <select name="id_persyaratan" class="form-control">
                        <option value="">--Jenis Dokumen--</option>
                        <?php foreach ($persyaratan as $key => $value) { ?>
                            <option value="<?= $value['id_persyaratan'] ?>"><?= $value['nama_persyaratan'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>File Dokumen</label><br>
                    <input type="file" name="file_dokumen" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Kirim Pendaftaran -->
<div class="modal fade" id="kirim">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kirim Pendaftaran ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="text-danger">
                    <b>Periksa Lagi Data Dan Kelengkapan Dokumen Anda Pastkan Semua Data Yang Akan Adan Kirim SUdah Benar !!</b>
                    <br>
                    <br>
                    <b>Data yang sudah dikirim tidak dapat di ganti lagi</b>
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('Pendaftaran/kirimPendaftaran/' . $mhs['npm']) ?>" class="btn btn-primary btn-sm btn-flat">Kirim</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_gambar').change(function() {
        bacaGambar(this);
    });
</script>