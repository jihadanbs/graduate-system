<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A4</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="<?= base_url('paper') ?>/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">
        <h3 style="text-align: center;"><b><u>SURAT PERNYATAAN PENGAMBILAN IJAZAH</u></b></h3><br>

        <table style="text-align: left;">
            <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <td><?= $mhs['nama_mahasiswa'] ?></td>
            </tr>
            <tr>
                <th>NPM</th>
                <th>:</th>
                <td><?= $mhs['npm'] ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td><?= $mhs['agama'] ?></td>
            </tr>
            <tr>
                <th>Tempat/Tanggal Lahir</th>
                <th>:</th>
                <td><?= $mhs['tempat_lahir'] ?> / <?= date('d F Y', strtotime($mhs['tgl_lahir'])) ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td><?= $mhs['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki' ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td><?= $mhs['alamat'] ?></td>
            </tr>
            <tr>
                <th>Handphone</th>
                <th>:</th>
                <td><?= $mhs['no_hp'] ?></td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <th>:</th>
                <td><?= $mhs['nama_prodi'] ?></td>
            </tr>
            <tr>
                <th>Jenjang</th>
                <th>:</th>
                <td><?= $mhs['jenjang'] ?></td>
            </tr>
            <tr>
                <th>Tanggal Lulus</th>
                <th>:</th>
                <td><?= date('d F Y', strtotime($mhs['tgl_lulus'])) ?></td>
            </tr>
            <tr>
                <th>IPK</th>
                <th>:</th>
                <td><?= $mhs['ipk'] ?></td>
            </tr>
            <tr>
                <th>Nama Ayah</th>
                <th>:</th>
                <td><?= $mhs['nama_ayah'] ?></td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <th>:</th>
                <td><?= $mhs['nama_ibu'] ?></td>
            </tr>
            <tr>
                <th>Alamat Orang Tua</th>
                <th>:</th>
                <td><?= $mhs['alamat_ortu'] ?></td>
            </tr>
            <tr>
                <th>Telpon Orang Tua</th>
                <th>:</th>
                <td><?= $mhs['telpon_ortu'] ?></td>
            </tr>
        </table>
        <p style="text-align: justify;"><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Dengan ini menyatakan bahwa saya bersedia untuk mengambil ijazah atas nama saya paling lambat 6 (enam) bulan sejak tanggal kelulusan/wisuda saya dengan melengkapi persyaratan yang telah ditentukan. Apabila ijazah tersebut tidak diambil dalam jangka waktu yang telah ditentukan, maka saya bersedia menerisa segala resiko (kehilangan atau kerusakan).</span></p>
        <p>
        <div style="text-align: justify;"><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Demikian pernyataan ini saya buat dengan sadar dan tanpa tekanan dari pihak nmanapun.</span></div><br>
        <div style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; text-align: right;">Jakarta, <?= date('d M Y') ?></div>
        <div style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; text-align: right;">Yang membuat pernyataan</div>
        <div style="text-align: right;">
            <font color="#000000" face="Times New Roman" size="3"><br></font>
        </div>
        </p>
        <p style="text-align: right; ">Materai <br> 10.000</p>
        <p>
        <div style="text-align: right;">
            <font color="#000000" face="Times New Roman" size="3"><br></font>
        </div><span style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">
            <div style="text-align: right;"><?= $mhs['nama_mahasiswa'] ?></div>
        </span></p>
    </section>
</body>

</html>