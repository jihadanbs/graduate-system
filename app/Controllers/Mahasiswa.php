<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;
use App\Models\ModelProdi;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
        $this->ModelProdi = new ModelProdi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Mahasiswa',
            'menu' => 'masterdata',
            'submenu' => 'mahasiswa',
            'page'  => 'staf/v_mahasiswa',
            'mhs' => $this->ModelMahasiswa->allData(),
            'prodi' => $this->ModelProdi->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function insertData()
    {
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'id_prodi' => $this->request->getPost('id_prodi'),
            'password' => $this->request->getPost('npm'),
            'status_dokumen' => 0,
            'status_pendaftaran' => 0,
        ];
        $this->ModelMahasiswa->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
        return redirect()->to('Mahasiswa');
    }

    public function deleteData($id_mahasiswa)
    {
        $data = ['id_mahasiswa' => $id_mahasiswa];
        $this->ModelMahasiswa->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
        return redirect()->to('Mahasiswa');
    }

    public function updateData($id_mahasiswa)
    {
        $data = [
            'id_mahasiswa' => $id_mahasiswa,
            'npm' => $this->request->getPost('npm'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'id_prodi' => $this->request->getPost('id_prodi'),
        ];
        $this->ModelMahasiswa->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !');
        return redirect()->to('Mahasiswa');
    }
}
