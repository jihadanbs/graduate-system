<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Graduate | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('back') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">The Graduate</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login</p>

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }

                if (session()->getFlashdata('gagal')) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo session()->getFlashdata('gagal');
                    echo '</div>';
                }
                $error = validation_errors();
                ?>

                <?= form_open('Auth/cekLogin') ?>
                <div class="form-group">
                    <input name="username" class="form-control" placeholder="NIM/NIDN/Username">
                    <p class="text-danger"><?= isset($error['username']) == isset($error['username']) ? validation_show_error('username') : '' ?></p>
                </div>

                <div class="form-group">
                    <select name="level" class="form-control">
                        <option value="">-- Hak Akses --</option>
                        <option value="S">Staf</option>
                        <option value="D">Dosen</option>
                        <option value="M">Mahasiswa</option>
                    </select>
                    <p class="text-danger"><?= isset($error['level']) == isset($error['level']) ? validation_show_error('level') : '' ?></p>
                </div>

                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <p class="text-danger"><?= isset($error['password']) == isset($error['password']) ? validation_show_error('password') : '' ?></p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="<?= base_url() ?>" class="btn btn-success btn-block btn-flat">Websites</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('back') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('back') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('back') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>