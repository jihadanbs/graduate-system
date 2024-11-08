<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Graduate | <?= $judul ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/dist/css/adminlte.min.css">



    <!-- jQuery -->
    <script src="<?= base_url('back') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('back') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('back') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('back') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('back') ?>/dist/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">

    <?php
    $db = \Config\Database::connect();
    $mhs = $db->table('tbl_mahasiswa')
        ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
        ->where('status_pendaftaran', 1)
        ->where('status_dokumen', 0)
        ->limit(5)
        ->orderBy('id_mahasiswa', 'ASC')
        ->get()->getResultArray();

    $jml = $db->table('tbl_mahasiswa')
        ->where('status_pendaftaran', 1)
        ->where('status_dokumen', 0)
        ->countAllResults();

    ?>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge"><?= $jml ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <?php foreach ($mhs as $key => $value) { ?>
                            <a href="<?= base_url('DashboardStaf/cekPendaftaranMasuk/' . $value['npm']) ?>" class="dropdown-item">
                                <!-- Message Start -->

                                <div class="media">
                                    <img src="<?= base_url('foto/' . $value['foto']) ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <?= $value['npm'] ?>
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm"><?= $value['nama_mahasiswa'] ?></p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?= date('d F Y', strtotime($value['tgl_wisuda'])) ?></p>
                                    </div>
                                </div>

                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                        <?php } ?>
                        <a href="<?= base_url('DashboardStaf/pendaftaranMasuk') ?>" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Auth/logOut') ?>" role="button">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>/graduate.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>The Graduate</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block"><?= session()->get('nama_tendik') ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('DashboardStaf') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item <?= $menu == 'masterdata' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $menu == 'masterdata' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('Dosen') ?>" class="nav-link <?= $submenu == 'dosen' ? ' active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dosen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Mahasiswa') ?>" class="nav-link <?= $submenu == 'mahasiswa' ? ' active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mahasiswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Tendik') ?>" class="nav-link <?= $submenu == 'tendik' ? ' active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tendik</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Berkas') ?>" class="nav-link <?= $menu == 'berkas' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Berkas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('DashboardStaf/pendaftaranMasuk') ?>" class="nav-link <?= $menu == 'pendaftaranmasuk' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-download"></i>
                                <p>Pendaftaran Masuk</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('DashboardStaf/calonWisudawan') ?>" class="nav-link <?= $menu == 'calonwisudawan' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>Calon Wisudawan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Persyaratan') ?>" class="nav-link <?= $menu == 'persyaratan' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Persyaratan</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $judul ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        if ($page) {
                            echo view($page);
                        }
                        ?>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>">The Graduate</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


</body>

</html>