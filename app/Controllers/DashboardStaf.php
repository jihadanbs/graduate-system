<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDashboardStaf;
use App\Models\ModelPendaftaran;
use App\Models\ModelMahasiswa;
use App\Models\ModelDosen;

class DashboardStaf extends BaseController
{
    public function __construct()
    {
        $this->ModelDashboardStaf = new ModelDashboardStaf();
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelMahasiswa = new ModelMahasiswa();
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard Staf',
            'menu'  => 'dashboard',
            'submenu'  => '',
            'page'  => 'staf/v_dashboard',
            'jumlahPendaftaranMasuk' => $this->ModelDashboardStaf->jumlahPendaftaranMasuk(),
            'jumlahWisudawan' => $this->ModelMahasiswa->jumlahWisudawan(),
            'jumlahMahasiswa' => $this->ModelMahasiswa->jumlahMahasiswa(),
            'jumlahdosen' => $this->ModelDosen->jumlahDosen(),
        ];
        return view('v_template_staf', $data);
    }

    public function pendaftaranMasuk()
    {
        $data = [
            'judul' => 'Pendaftaran Masuk',
            'menu'  => 'pendaftaranmasuk',
            'submenu'  => '',
            'page'  => 'staf/v_pendaftaran_masuk',
            'mhs'   => $this->ModelDashboardStaf->dataPendaftaranMasuk(),
        ];
        return view('v_template_staf', $data);
    }

    public function cekPendaftaranMasuk($npm)
    {
        $data = [
            'judul' => 'Cek Pendaftaran Masuk',
            'menu'  => 'pendaftaranmasuk',
            'submenu'  => '',
            'page'  => 'staf/v_cek_pendaftaran_masuk',
            'mhs'   => $this->ModelDashboardStaf->cekPendaftaranMasuk($npm),
            'dokumen'   => $this->ModelDashboardStaf->allDokumen($npm),
        ];
        return view('v_template_staf', $data);
    }

    public function terimaPendaftaran($npm)
    {
        $data = [
            'npm' => $npm,
            'status_dokumen' => 1,
        ];
        $this->ModelPendaftaran->updateDataPendaftaran($data);
        session()->setFlashdata('pesan', 'Pendaftaran Telah Berhasil Diverifikasi !');
        return redirect()->to('DashboardStaf/pendaftaranMasuk');
    }

    public function tolakPendaftaran($npm)
    {
        $data = [
            'npm' => $npm,
            'ctt' => $this->request->getPost('ctt'),
            'status_dokumen' => 2,
            'status_pendaftaran' => 2,
        ];
        $this->ModelPendaftaran->updateDataPendaftaran($data);
        session()->setFlashdata('pesan', 'Pendaftaran Telah Berhasil Diverifikasi !');
        return redirect()->to('DashboardStaf/pendaftaranMasuk');
    }

    public function calonWisudawan()
    {
        $data = [
            'judul' => 'Calon Wisudawan',
            'menu'  => 'calonwisudawan',
            'submenu'  => '',
            'page'  => 'staf/v_calon_wisudawan',
            'mhs'   => $this->ModelDashboardStaf->dataCalonWisudawan(),
        ];
        return view('v_template_staf', $data);
    }

    public function detailWisudawan($npm)
    {
        $data = [
            'judul' => 'Cek Pendaftaran Masuk',
            'menu'  => 'pendaftaranmasuk',
            'submenu'  => '',
            'page'  => 'staf/v_detail_wisudawan',
            'mhs'   => $this->ModelDashboardStaf->cekPendaftaranMasuk($npm),
            'dokumen'   => $this->ModelDashboardStaf->allDokumen($npm),
        ];
        return view('v_template_staf', $data);
    }
}
