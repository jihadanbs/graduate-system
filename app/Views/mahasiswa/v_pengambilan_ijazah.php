<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <h4 class="text-center"><b>Formulir Surat Pernyataan Pengambilan Ijazah</b></h4>
            <br>

            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i> Lengkapi Isian Formulir Sebelum Di Cetak !</h5>
            </div>

            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <?php
            $error = validation_errors();

            ?>
            <?= form_open_multipart('DashboardMahasiswa/updateDataPengambilanIjazah/' . $mhs['npm']) ?>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NPM</label>
                        <input name="npm" value="<?= $mhs['npm'] ?>" class="form-control" placeholder="NPM" readonly>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" value="<?= $mhs['nama_mahasiswa'] ?>" class="form-control" placeholder="Nama Mahasiswa">
                        <p class="text-danger"><?= isset($error['nama_mahasiswa']) == isset($error['nama_mahasiswa']) ? validation_show_error('nama_mahasiswa') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Agama</label>
                        <input name="agama" value="<?= $mhs['agama'] ?>" class="form-control" placeholder="Agama">
                        <p class="text-danger"><?= isset($error['agama']) == isset($error['agama']) ? validation_show_error('agama') : '' ?></p>
                    </div>
                </div>

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

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" value="<?= $mhs['alamat'] ?>" class="form-control" placeholder="Alamat">
                        <p class="text-danger"><?= isset($error['alamat']) == isset($error['alamat']) ? validation_show_error('alamat') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Hanphone</label>
                        <input name="no_hp" value="<?= $mhs['no_hp'] ?>" class="form-control" placeholder="No Handphone">
                        <p class="text-danger"><?= isset($error['no_hp']) == isset($error['no_hp']) ? validation_show_error('no_hp') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-3">
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
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenjang</label>
                        <input name="jenjang" value="<?= $mhs['jenjang'] ?>" class="form-control" placeholder="Jenjang">
                        <p class="text-danger"><?= isset($error['jenjang']) == isset($error['jenjang']) ? validation_show_error('jenjang') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-34">
                    <div class="form-group">
                        <label>IPK</label>
                        <input name="ipk" value="<?= $mhs['ipk'] ?>" class="form-control" placeholder="IPK">
                        <p class="text-danger"><?= isset($error['ipk']) == isset($error['ipk']) ? validation_show_error('ipk') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lulus</label>
                        <input type="date" name="tgl_lulus" value="<?= $mhs['tgl_lulus'] ?>" class="form-control" placeholder="Pembimbing 1">
                        <p class="text-danger"><?= isset($error['tgl_lulus']) == isset($error['tgl_lulus']) ? validation_show_error('tgl_lulus') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input name="nama_ayah" value="<?= $mhs['nama_ayah'] ?>" class="form-control" placeholder="Nama Ayah">
                        <p class="text-danger"><?= isset($error['nama_ayah']) == isset($error['nama_ayah']) ? validation_show_error('nama_ayah') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input name="nama_ibu" value="<?= $mhs['nama_ibu'] ?>" class="form-control" placeholder="Nama Ibu">
                        <p class="text-danger"><?= isset($error['nama_ibu']) == isset($error['nama_ibu']) ? validation_show_error('nama_ibu') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Telpon Orang Tua</label>
                        <input name="telpon_ortu" value="<?= $mhs['telpon_ortu'] ?>" class="form-control" placeholder="Telpon Orang Tua">
                        <p class="text-danger"><?= isset($error['telpon_ortu']) == isset($error['telpon_ortu']) ? validation_show_error('telpon_ortu') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Alamat Orang Tua</label>
                        <input name="alamat_ortu" value="<?= $mhs['alamat_ortu'] ?>" class="form-control" placeholder="Alamat Orang Tua">
                        <p class="text-danger"><?= isset($error['alamat_ortu']) == isset($error['alamat_ortu']) ? validation_show_error('alamat_ortu') : '' ?></p>
                    </div>
                </div>


            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?= base_url('DashboardMahasiswa/cetakFormulirPengambilanIjazah') ?>" target="_blank" class="btn btn-sm btn-success btn-flat"><i class="fa fa-print"></i> Cetak Formulir</a>
            </div>



            <?php form_close() ?>
        </div>
    </div>
</div>