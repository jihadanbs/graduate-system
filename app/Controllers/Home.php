<?php

namespace App\Controllers;

use App\Models\ModelPersyaratan;
use App\Models\ModelMahasiswa;
use App\Models\ModelProdi;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelPersyaratan = new ModelPersyaratan();
        $this->ModelMahasiswa = new ModelMahasiswa();
        $this->ModelProdi = new ModelProdi();
    }
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'page'  => 'v_home',
            'persyaratan' => $this->ModelPersyaratan->allData(),
            'jmlwisudawan' => $this->ModelMahasiswa->jumlahWisudawan(),
            'jmlprodi' => $this->ModelProdi->jumlahProdi(),
        ];
        return view('v_template_front', $data);
    }

    public function calonWisudawan()
    {
        $data = [
            'judul' => 'Calon Wisudawan',
            'page'  => 'v_calon_wisudawan',
            'mahasiswa' => $this->ModelMahasiswa->dataCalonWisudawan(),
        ];
        return view('v_template_front', $data);
    }

    public function persyaratan()
    {
        $data = [
            'judul' => 'Persyaratan Pendaftaran',
            'page'  => 'v_persyaratan',
            'persyaratan' => $this->ModelPersyaratan->allData(),
        ];
        return view('v_template_front', $data);
    }

    public function dataWisudawan($id_mahasiswa)
    {
        $data = [
            'judul' => 'Data Wisudawan',
            'page'  => 'v_data_wisudawan',
            'mhs' => $this->ModelMahasiswa->detailCalonWisudawan($id_mahasiswa),
        ];
        return view('v_template_front', $data);
    }
}
