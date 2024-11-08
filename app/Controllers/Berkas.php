<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBerkas;
use App\Models\ModelDosen;

class Berkas extends BaseController
{

    public function __construct()
    {

        $this->ModelBerkas = new ModelBerkas();
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'judul' => 'Berkas',
            'menu'  => 'beritaacara',
            'submenu'  => '',
            'page'  => 'staf/berkas/v_daftar_mahasiswa',
            'mhs'   => $this->ModelBerkas->allDataMahasiswa(),
        ];
        return view('v_template_staf', $data);
    }

    public function editBeritaAcara($id_mahasiswa)
    {
        $data = [
            'judul' => 'Edit Berita Acara Ujian Skripsi',
            'menu'  => 'beritaacara',
            'submenu'  => '',
            'page'  => 'staf/beritaacara/v_edit_berita_acara',
            'mhs'   => $this->ModelBeritaAcara->detailDataMahasiswa($id_mahasiswa),
            'dosen' => $this->ModelDosen->allData(),
        ];
        return view('v_template_staf', $data);
    }

    public function updateBeritaAcara($id_mahasiswa)
    {
        $data = [
            'id_mahasiswa' => $id_mahasiswa,
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'pembimbing_ilmu' => $this->request->getPost('pembimbing_ilmu'),
            'pembimbing_agama' => $this->request->getPost('pembimbing_agama'),
            'judul_skripsi' => $this->request->getPost('judul_skripsi'),
            'tgl_ujian' => $this->request->getPost('tgl_ujian'),
            'jam_ujian' => $this->request->getPost('jam_ujian'),
            'penguji_murni' => $this->request->getPost('penguji_murni'),
            'ketua_komisi_penguji' => $this->request->getPost('ketua_komisi_penguji'),
            'hasil_ujian_huruf' => $this->request->getPost('hasil_ujian_huruf'),
            'hasil_ujian_angka' => $this->request->getPost('hasil_ujian_angka'),
            'tempat' => $this->request->getPost('tempat'),
        ];
        $this->ModelBeritaAcara->updateBeritaAcara($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to('BeritaAcara/editBeritaAcara/' . $id_mahasiswa);
    }

    public function uploadBeritaAcara($id_mahasiswa)
    {
        if ($this->validate([
            'file_berita_acara' => [
                'label' => 'File Berita Acara',
                'rules'  => 'max_size[file_berita_acara,2048]|ext_in[file_berita_acara,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_berita_acara = $this->request->getFile('file_berita_acara');
            $nama_file = $file_berita_acara->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_berita_acara' => 1,
                'file_berita_acara'  => $nama_file,
            ];
            $file_berita_acara->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File Berita Acara Berhasil Di Update !!');
            return redirect()->to('Berkas');
        } else {
            # jika gagal validasi
            return redirect()->to('Berkas')->withInput();
        }
    }

    public function uploadUndangan($id_mahasiswa)
    {
        if ($this->validate([
            'file_undangan' => [
                'label' => 'File Undangan',
                'rules'  => 'max_size[file_undangan,2048]|ext_in[file_undangan,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_undangan = $this->request->getFile('file_undangan');
            $nama_file = $file_undangan->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_undangan' => 1,
                'file_undangan'  => $nama_file,
            ];
            $file_undangan->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File Undangan Berhasil Di Update !!');
            return redirect()->to('Berkas');
        } else {
            # jika gagal validasi
            return redirect()->to('Berkas')->withInput();
        }
    }

    public function uploadSuratTugas($id_mahasiswa)
    {
        if ($this->validate([
            'file_surat_tugas' => [
                'label' => 'File Surat Tugas',
                'rules'  => 'max_size[file_surat_tugas,2048]|ext_in[file_surat_tugas,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_surat_tugas = $this->request->getFile('file_surat_tugas');
            $nama_file = $file_surat_tugas->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_surat_tugas' => 1,
                'file_surat_tugas'  => $nama_file,
            ];
            $file_surat_tugas->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File Surat Tugas Berhasil Di Update !!');
            return redirect()->to('Berkas');
        } else {
            # jika gagal validasi
            return redirect()->to('Berkas')->withInput();
        }
    }

    public function uploadSkl($id_mahasiswa)
    {
        if ($this->validate([
            'file_skl' => [
                'label' => 'File SKL',
                'rules'  => 'max_size[file_skl,2048]|ext_in[file_skl,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_skl = $this->request->getFile('file_skl');
            $nama_file = $file_skl->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_skl' => 1,
                'file_skl'  => $nama_file,
            ];
            $file_skl->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File SKL Berhasil Di Update !!');
            return redirect()->to('Berkas');
        } else {
            # jika gagal validasi
            return redirect()->to('Berkas')->withInput();
        }
    }
   
    public function uploadSTP($id_mahasiswa)
    {
        if ($this->validate([
            'file_surat_tugas_penguji' => [
                'label' => 'File SKL',
                'rules'  => 'max_size[file_surat_tugas_penguji,2048]|ext_in[file_surat_tugas_penguji,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_surat_tugas_penguji = $this->request->getFile('file_surat_tugas_penguji');
            $nama_file = $file_surat_tugas_penguji->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_surat_tugas_penguji' => 1,
                'file_surat_tugas_penguji'  => $nama_file,
            ];
            $file_surat_tugas_penguji->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File SKL Berhasil Di Update !!');
            return redirect()->to('Berkas');
        } else {
            # jika gagal validasi
            return redirect()->to('Berkas')->withInput();
        }
    }

    
}
