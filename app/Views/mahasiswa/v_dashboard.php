<?php

$db = \Config\Database::connect();


$dokumen = $db->table('tbl_dokumen')
    ->where('npm', session()->get('npm'))
    ->get()->getResultArray();

if ($dokumen <> null) {
    foreach ($dokumen as $key => $value) {
        $id_syarat[] = $value['id_persyaratan'];
    }
} else {
    $id_syarat[] = 0;
}
$syarat = $db->table('tbl_persyaratan')
    ->whereNotIn('tbl_persyaratan.id_persyaratan', $id_syarat)
    ->get()->getResultArray();

///=============
$dokumen2 = $db->table('tbl_dokumen')
    ->join('tbl_persyaratan', 'tbl_persyaratan.id_persyaratan=tbl_dokumen.id_persyaratan')
    ->where('tbl_dokumen.npm', session()->get('npm'))
    ->get()->getResultArray();

?>

<div class="col-sm-12">
    <div class="callout callout-info">
        <h5>Selamat Datang <b class="text-primary"><?= $mhs['nama_mahasiswa'] ?></b></h5>
    </div>
</div>

<div class="col-sm-12">
    <h3><b>Persyaratan Wisuda</b></h3>
    <div class="row">
        <?php foreach ($syarat as $key => $value) { ?>
            <div class="col-sm-6">
                <div class="callout callout-danger">
                    <h5><i class="icon fas fa-times text-danger"></i> <?= $value['nama_persyaratan'] ?></h5>
                </div>
            </div>
        <?php } ?>
        <?php foreach ($dokumen2 as $key => $value) { ?>
            <div class="col-sm-6">
                <div class="callout callout-success">
                    <h5><i class="icon fas fa-check text-success"></i> <?= $value['nama_persyaratan'] ?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
</div>