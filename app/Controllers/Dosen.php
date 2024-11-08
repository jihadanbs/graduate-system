<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDosen;

class Dosen extends BaseController
{
    public function __construct()
    {
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dosen',
            'menu' => 'masterdata',
            'submenu' => 'dosen',
            'page'  => 'staf/v_dosen',
            'dosen' => $this->ModelDosen->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function insertData()
    {
        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'password' => $this->request->getPost('nidn'),
        ];
        $this->ModelDosen->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
        return redirect()->to('Dosen');
    }

    public function deleteData($id_dosen)
    {
        $data = ['id_dosen' => $id_dosen];
        $this->ModelDosen->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
        return redirect()->to('Dosen');
    }

    public function updateData($id_dosen)
    {
        $data = [
            'id_dosen' => $id_dosen,
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
        ];
        $this->ModelDosen->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !');
        return redirect()->to('Dosen');
    }
}
