<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTendik;

class Tendik extends BaseController
{
    public function __construct()
    {
        $this->ModelTendik = new ModelTendik();
    }

    public function index()
    {
        $data = [
            'judul' => 'Tendik',
            'menu' => 'masterdata',
            'submenu' => 'tendik',
            'page'  => 'staf/v_tendik',
            'tendik' => $this->ModelTendik->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function insertData()
    {
        $data = [
            'nama_tendik' => $this->request->getPost('nama_tendik'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $this->ModelTendik->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
        return redirect()->to('Tendik');
    }

    public function deleteData($id_tendik)
    {
        $data = ['id_tendik' => $id_tendik];
        $this->ModelTendik->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
        return redirect()->to('Tendik');
    }

    public function updateData($id_tendik)
    {
        $data = [
            'id_tendik' => $id_tendik,
            'nama_tendik' => $this->request->getPost('nama_tendik'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $this->ModelTendik->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !');
        return redirect()->to('Tendik');
    }
}
