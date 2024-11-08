<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Calon Wisudawan</li>
        </ol>
        <h2>Calon Wisudawan Universitas YARSI</h2>
    </div>
</section><!-- End Breadcrumbs -->

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th width="50px" class="text-center">NO</th>
                        <th class="text-center">NPM</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">Prodi</th>
                        <th class="text-center">IPK</th>
                        <th class="text-center">Status Dokumen</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mahasiswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td class="text-center"><?= $value['npm'] ?></td>
                            <td><?= $value['nama_mahasiswa'] ?></td>
                            <td class="text-center"><?= $value['nama_prodi'] ?></td>
                            <td class="text-center"><?= $value['ipk'] ?></td>
                            <td class="text-center">
                                <?php
                                if ($value['status_dokumen'] == 0) {
                                    echo '<span class="badge text-bg-primary">Dalam Proses</span>';
                                } elseif ($value['status_dokumen'] == 1) {
                                    echo '<span class="badge text-bg-success">Valid</span>';
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('Home/dataWisudawan/' . $value['id_mahasiswa']) ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i> View</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>