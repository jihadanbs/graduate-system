<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Data Calon Wisudawan</li>
        </ol>
        <h2><?= $mhs['nama_mahasiswa'] ?></h2>
    </div>
</section><!-- End Breadcrumbs -->


<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <table class="table table-borderless table-sm">
                <!-- <h4 class="text-center"><b>Formulir Pendaftaran Wisuda</b></h4> -->
                <tr>
                    <td rowspan="18" class="text-center">
                        <img src="<?= base_url('foto/' . $mhs['foto']) ?>" id="gambar_load" width="150px" height="200" style="border: 4px; border-style: solid; border-color: #000;">
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
                <tr>
                    <th>Status Dokumen</th>
                    <th class="text-center">:</th>
                    <td>
                        <?php
                        if ($mhs['status_dokumen'] == 0) {
                            echo '<span class="badge text-bg-primary">Dalam Proses</span>';
                        } elseif ($mhs['status_dokumen'] == 1) {
                            echo '<span class="badge text-bg-success">Valid</span>';
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section><!-- End Breadcrumbs -->