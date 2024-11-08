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
        <!-- Write HTML just like a web page -->
        <article><img src="<?= base_url('yarsi.png') ?>" width="225px"></article>

        <p class="MsoBodyText" align="center" style="text-align:center;tab-stops:36.0pt 72.0pt 108.0pt 144.0pt 180.0pt 216.0pt 252.0pt 288.0pt 324.0pt 360.0pt 396.0pt 432.0pt">
            <font color="#000000" style=""><b style=""><u style=""><span lang="IN" style="font-size: 14pt; font-family: &quot;Arial Black&quot;, sans-serif;">S</span></u></b><b style=""><u><span lang="SV" style="font-family: &quot;Arial Black&quot;, sans-serif;"><span style="font-size: 14pt;">URAT KETERANGAN LULUS</span><span style="font-size: 18.6667px;"><br></span></span></u></b><span lang="SV" style="font-size: 12pt; font-family: &quot;Arial Black&quot;, sans-serif;">No. </span><span lang="SV" style="font-size: 12pt; font-family: &quot;Arial Black&quot;, sans-serif;">00<?= $mhs['id_mahasiswa'] ?>/FTI/S.Ket PP.30/VII/2022</span><b style=""><span lang="SV" style="font-size:12.0pt;
font-family:&quot;Calibri&quot;,sans-serif;mso-ansi-language:SV">&nbsp;</span></b></font>
        </p>
        <p class="MsoNormal"><span lang="SV" style="font-family: Calibri, sans-serif;">
                <font color="#000000">&nbsp;</font>
            </span><span style="color: rgb(0, 0, 0); text-align: justify;">Yang bertanda tangan di bawah ini,
                Dekan&nbsp; Fakultas Teknologi Informasi</span></p>
        <p class="MsoNormal" style="text-align:justify;line-height:150%"><span lang="NO-BOK" style="">
                <font color="#000000">
                    Universitas YARSI&nbsp; menerangkan bahwa :</font>
            </span></p>
        <p class="MsoNormal" style="margin-left:42.55pt;line-height:150%;tab-stops:163.05pt 177.2pt">
            <font color="#000000"><b><span lang="PT-BR">Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></b><b><span lang="IN"> &nbsp; </span></b><!--[if supportFields]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='mso-ansi-language:
IN;mso-no-proof:yes'><span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>MERGEFIELD Nama <span style='mso-element:field-separator'></span></span></b><![endif]--><b><span lang="IN"><?= $mhs['nama_mahasiswa'] ?><br></span></b></font><b style="color: rgb(0, 0, 0);">
                <span lang="PT-BR">NPM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                    &nbsp; </span></b><b style="color: rgb(0, 0, 0);"><span lang="PT-BR"><?= $mhs['npm'] ?><br></span></b><b style="color: rgb(0, 0, 0);">
                <span lang="PT-BR">Lahir&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;&nbsp;
                </span></b><b><span lang="PT-BR"><?= $mhs['tempat_lahir'] ?>, <?= date('d F Y', strtotime($mhs['tgl_lahir'])) ?><br>
                    Program Studi&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;<?= $mhs['nama_prodi'] ?></span></b>
        </p>
        <p class="MsoNormal" style="text-align:justify;line-height:150%">
            <font color="#000000"><span lang="PT-BR">Sesuai dengan Hasil Rapat Yudisium
                    Program Studi <?= $mhs['nama_prodi'] ?></span><span lang="PT-BR"><br>
                    tanggal </span><span lang="PT-BR"><?= date('d F Y', strtotime($mhs['tgl_lulus'])) ?></span>
                <span lang="PT-BR"> dinyatakan &nbsp;<b>LULUS</b> &nbsp;dari Program Studi </span><span lang="IN"><?= $mhs['nama_prodi'] ?></span><!--[if supportFields]><span
lang=IN style='mso-ansi-language:IN'><span style='mso-element:field-end'></span></span><![endif]--><span lang="IN"> </span><span lang="PT-BR">Fakultas
                    Teknologi Informasi Universitas YARSI, berhak memperoleh gelar akademis </span><!--[if supportFields]><b><span
lang=PT-BR style='mso-ansi-language:PT-BR'><span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>MERGEFIELD Gelar <span style='mso-element:
field-separator'></span></span></b><![endif]--><b><span lang="PT-BR">Sarjana Komputer
                        (S.Kom.)</span></b><!--[if supportFields]><b><span lang=PT-BR
style='mso-ansi-language:PT-BR'><span style='mso-element:field-end'></span></span></b><![endif]--><span lang="PT-BR">.<b><br></b></span>
            </font>
        </p>
        <p class="MsoNormal" style="text-align:justify;line-height:150%"><span style="color: rgb(0, 0, 0);">Demikian surat keterangan lulus ini dibuat
                untuk kepentingan yang bersangkutan dan berlaku sampai dikeluarkan ijazah asli.</span></p>
        <p class="MsoNormal" style="text-align:justify;line-height:150%"><span lang="PT-BR">
                <font color="#000000" style=""><br></font>
            </span></p>
        <div style="text-align: right;">
            <font color="#000000" style=""><span lang="NO-BOK">Jakarta, </span><?= date('d M Y') ?></font>
        </div>
        <font color="#000000">
            <div style="text-align: right;">DEKAN FAKULTAS
                TEKNOLOGI INFORMASI</div>
        </font>
        <p></p>
        <p class="MsoNormal" style="text-align: right; line-height: 150%;"><img src="<?= base_url('ttd.png') ?>" style="width: 125px;">
        <p class="MsoNormal" style="text-align: right; line-height: 150%;"><span style="color: rgb(0, 0, 0);"><span lang="NO-BOK" style="font-size: 12pt;">Dr.</span></span><span style="color: rgb(0, 0, 0);"><span lang="IN" style="font-size:12.0pt;mso-ansi-language:IN"> Ummi Azizah Rachmawati,</span></span><span style="color: rgb(0, 0, 0);"><span style="font-size:12.0pt"> S.Kom, </span></span><span style="color: rgb(0, 0, 0);"><span lang="IN" style="font-size: 12pt;">M.Kom.</span></span><br></p>
        <!-- ============ -->
    </section>

</body>

</html>