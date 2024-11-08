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
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <table id="example1" class="table table-bordered" id="example">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Prodi</th>
                        <th>Tanggal Wisuda</th>
                        <th>Foto</th>
                        <th cla>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td class="text-center"><?= $value['npm'] ?></td>
                            <td><?= $value['nama_mahasiswa'] ?></td>
                            <td class="text-center"><?= $value['nama_prodi'] ?></td>
                            <td class="text-center"><?= date('d F Y', strtotime($value['tgl_wisuda'])) ?></td>
                            <td class="text-center"><img src="<?= base_url('foto/' . $value['foto']) ?>" width="75px"></td>
                            <td class="text-center">
                                <a href="<?= base_url('DashboardStaf/cekPendaftaranMasuk/' . $value['npm']) ?>" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-eye"></i> Cek</a>
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