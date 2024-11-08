<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Formulir Pendaftaran</h3>

            <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div> -->
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <table class="table table-borderless table-sm">
                <h4 class="text-center"><b>Formulir Pendaftaran Wisuda</b></h4>
                <tr>
                    <td rowspan="17" width="250px" class="text-center">
                        <img src="<?= base_url('foto/' . $mhs['foto']) ?>" id="gambar_load" width="150px" height="200" style="border: 2px; border-style: solid; border-color: #000;">
                    </td>

                    <th width="170px">NPM</th>
                    <th width="30px" class="text-center">:</th>
                    <th><?= $mhs['npm'] ?></th>
                </tr>
                <tr>

                    <th width="150px">NIK</th>
                    <th width="30px" class="text-center">:</th>
                    <td><?= $mhs['nik'] ?></td>
                </tr>
                <tr>

                    <th>Nama</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['nama_mahasiswa'] ?></td>
                </tr>
                <tr>

                    <th>Tempat/Tanggal Lahir</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['tempat_lahir'] ?> / <?= date('d F Y', strtotime($mhs['tgl_lahir'])) ?></td>
                </tr>
                <tr>

                    <th>Jenis Kelamin</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki' ?></td>
                </tr>
                <tr>

                    <th>Alamat</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['alamat'] ?></td>
                </tr>
                <tr>

                    <th>E-Mail</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['email'] ?></td>
                </tr>
                <tr>

                    <th>No Hanphone</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['no_hp'] ?></td>
                </tr>
                <tr>

                    <th>No Telepon</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['no_telpon'] ?></td>
                </tr>
                <tr>

                    <th>Program Studi</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['nama_prodi'] ?></td>
                </tr>
                <tr>

                    <th>Total SKS</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['total_sks'] ?></td>
                </tr>
                <tr>

                    <th>IPK</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['ipk'] ?></td>
                </tr>
                <tr>

                    <th>Judul Skripsi</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['judul_skripsi'] ?></td>
                </tr>
                <tr>

                    <th>Pembimbing Ilmu</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['pembimbing_ilmu'] ?></td>
                </tr>
                <tr>

                    <th>Pembimbing Agama</th>
                    <th class="text-center">:</th>
                    <td><?= $mhs['pembimbing_agama'] ?></td>
                </tr>
                <tr>

                    <th>Tanggal Lulus</th>
                    <th class="text-center">:</th>
                    <td><?= date('d F Y', strtotime($mhs['tgl_lulus'])) ?></td>
                </tr>
                <tr>

                    <th>Tanggal Wisuda</th>
                    <th class="text-center">:</th>
                    <td><?= date('d F Y', strtotime($mhs['tgl_wisuda'])) ?></td>
                </tr>
            </table>
            <table class=" table table-bordered table-sm">
                <tr class="text-center">
                    <th width=50px>NO</th>
                    <th>Dokumen</th>
                    <th width="100px">Aksi</th>
                </tr>
                <?php $no = 1;
                foreach ($dokumen as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['nama_persyaratan'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('dokumen/' . $value['file_dokumen']) ?>" class="btn btn-xs btn-flat btn-success" target="_blank"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <div class="form-group"><br>
                <a href="<?= base_url('DashboardStaf/terimaPendaftaran/' . $mhs['npm']) ?>" class="btn btn-sm btn-success btn-flat"><i class="fas fa-check"></i> Verifikasi Pendaftaran</a>
                <button href="#" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#tolak"><i class="fas fa-times"></i> Tolak Pendaftaran</button>
            </div>
        </div>
    </div>

</div>


<!-- Modal Kirim Pendaftaran -->
<div class="modal fade" id="tolak">
    <div class="modal-dialog ">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Kirim Catatan ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('DashboardStaf/tolakPendaftaran/' . $mhs['npm']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <textarea name="ctt" rows="5" class="form-control" required></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm btn-flat">Kirim</button>
            </div>
            <?php form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>