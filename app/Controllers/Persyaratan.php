<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPersyaratan;

class Persyaratan extends BaseController
{
    public function __construct()
    {
        $this->ModelPersyaratan = new ModelPersyaratan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Persyaratan',
            'menu' => 'persyaratan',
            'submenu' => 'persyaratan',
            'page'  => 'staf/v_persyaratan',
            'persyaratan' => $this->ModelPersyaratan->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function insertData()
    {
        $data = ['nama_persyaratan' => $this->request->getPost('nama_persyaratan')];
        $this->ModelPersyaratan->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
        return redirect()->to('Persyaratan');
    }

    public function deleteData($id_persyaratan)
    {
        $data = ['id_persyaratan' => $id_persyaratan];
        $this->ModelPersyaratan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
        return redirect()->to('Persyaratan');
    }

    public function updateData($id_persyaratan)
    {
        $data = [
            'id_persyaratan' => $id_persyaratan,
            'nama_persyaratan' => $this->request->getPost('nama_persyaratan')
        ];
        $this->ModelPersyaratan->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !');
        return redirect()->to('Persyaratan');
    }
}
