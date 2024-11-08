<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;
use App\Models\ModelProdi;
use App\Models\ModelDosen;
use App\Models\ModelPersyaratan;
use App\Models\ModelBerkas;

class DashboardMahasiswa extends BaseController
{

    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelProdi = new ModelProdi();
        $this->ModelDosen = new ModelDosen();
        $this->ModelPersyaratan = new ModelPersyaratan();
        $this->ModelBerkas = new ModelBerkas();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard Mahasiswa',
            'menu' => 'dashboard',
            'page'  => 'mahasiswa/v_dashboard',
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
            'persyaratan' => $this->ModelPersyaratan->allData(),
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function skl()
    {
        $data = [
            'judul' => 'Surat Keterangan Lulus',
            'menu' => 'skl',
            'page'  => 'mahasiswa/v_skl',
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function printSkl()
    {
        $data = [
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('mahasiswa/v_print_skl', $data);
    }

    public function pengambilanIjazah()
    {
        $data = [
            'judul' => 'Formulir Pengambilan Izajah',
            'menu' => 'ijazah',
            'page'  => 'mahasiswa/v_pengambilan_ijazah',
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
            'prodi' => $this->ModelProdi->allData(),
        ];
        return view('v_template_mahasiswa', $data);
    }

    public function updateDataPengambilanIjazah($npm)
    {
        if ($this->validate([
            'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'tgl_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'no_hp' => [
                'label' => 'Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ],
            'id_prodi' => [
                'label' => 'Program Studi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Dipilih !'
                ]
            ], 'ipk' => [
                'label' => 'IPK',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_ayah' => [
                'label' => 'Nama Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nama_ibu' => [
                'label' => 'Nama Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'alamat_ortu' => [
                'label' => 'Alamat Orang Tua',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'telpon_ortu' => [
                'label' => 'Telepon Orang Tua',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ]
        ])) {
            $data = [
                'npm' => $npm,
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'agama' => $this->request->getPost('agama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp'),
                'id_prodi' => $this->request->getPost('id_prodi'),
                'jenjang' => $this->request->getPost('jenjang'),
                'ipk' => $this->request->getPost('ipk'),
                'tgl_lulus' => $this->request->getPost('tgl_lulus'),
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'nama_ibu' => $this->request->getPost('nama_ibu'),
                'alamat_ortu' => $this->request->getPost('alamat_ortu'),
                'telpon_ortu' => $this->request->getPost('telpon_ortu'),
            ];
            $this->ModelPendaftaran->updateDataPendaftaran($data);
            session()->setFlashdata('pesan', 'Data Formulir Berhasil Diupdate !!');
            return redirect()->to('DashboardMahasiswa/pengambilanIjazah');
        } else {
            return redirect()->to('DashboardMahasiswa/pengambilanIjazah')->withInput();
        }
    }

    public function cetakFormulirPengambilanIjazah()
    {
        $data = [
            'mhs'   => $this->ModelPendaftaran->dataMahasiswa(),
        ];
        return view('mahasiswa/v_cetak_formulir_pengambilan_ijazah', $data);
    }

    public function uploadArtikel($id_mahasiswa)
    {
        if ($this->validate([
            'file_artikel' => [
                'label' => 'File Artikel',
                'rules'  => 'max_size[file_artikel,2048]|ext_in[file_artikel,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_artikel = $this->request->getFile('file_artikel');
            $nama_file = $file_artikel->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_artikel' => 1,
                'file_artikel'  => $nama_file,
            ];
            $file_artikel->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File Artikel Berhasil Di Upload !!');
            return redirect()->to('DashboardMahasiswa/skl');
        } else {
            # jika gagal validasi
            return redirect()->to('DashboardMahasiswa/skl')->withInput();
        }
    }

    public function uploadPengesahan($id_mahasiswa)
    {
        if ($this->validate([
            'file_pengesahan' => [
                'label' => 'File Pengesahan',
                'rules'  => 'max_size[file_pengesahan,2048]|ext_in[file_pengesahan,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 2048 KB',
                    'ext_in' => 'File Hanya Boleh Berformat pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_pengesahan = $this->request->getFile('file_pengesahan');
            $nama_file = $file_pengesahan->getRandomName();

            $data = [
                'id_mahasiswa' => $id_mahasiswa,
                'status_file_pengesahan' => 1,
                'file_pengesahan'  => $nama_file,
            ];
            $file_pengesahan->move('dokumen', $nama_file);
            $this->ModelBerkas->updateBerkas($data);
            session()->setFlashdata('pesan', 'File Pengesahan Berhasil Di Upload !!');
            return redirect()->to('DashboardMahasiswa/skl');
        } else {
            # jika gagal validasi
            return redirect()->to('DashboardMahasiswa/skl')->withInput();
        }
    }
}
