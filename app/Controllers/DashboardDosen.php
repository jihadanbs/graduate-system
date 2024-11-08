<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDashboardDosen;
use App\Models\ModelProdi;
use App\Models\ModelBerkas;

class DashboardDosen extends BaseController
{

    public function __construct()
    {
        $this->ModelDashboardDosen = new ModelDashboardDosen();
        $this->ModelProdi = new ModelProdi();
        $this->ModelBerkas = new ModelBerkas();
    }

    public function index()
    {

        $data = [
            'judul' => 'Dashboard Dosen',
            'menu' => 'dashboard',
            'page'  => 'dosen/v_dashboard',
            'total_surat_tugas1' =>  $this->ModelDashboardDosen->totalDataMahasiswaBimbinganIlmu(),
            'total_surat_tugas2' =>  $this->ModelDashboardDosen->totalDataMahasiswaBimbinganAgama(),
            'total_surat_undangan' =>  $this->ModelDashboardDosen->totalDataSuratUndangan(),
            'total_berita_acara' =>  $this->ModelDashboardDosen->totalDataBeritaAcara(),
        ];
        return view('v_template_dosen', $data);
    }

    public function berkas()
    {
        $data = [
            'judul' => 'Surat Tugas',
            'menu' => 'berkas',
            'page'  => 'dosen/v_data_berkas',
            'mhs'   => $this->ModelDashboardDosen->dataMahasiswaBimbinganIlmu(),
            'mhs2'   => $this->ModelDashboardDosen->dataMahasiswaBimbinganAgama(),
        ];
        return view('v_template_dosen', $data);
    }
}
