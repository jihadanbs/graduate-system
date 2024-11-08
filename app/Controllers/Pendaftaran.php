<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;
use App\Models\ModelProdi;
use App\Models\ModelPersyaratan;
use App\Models\ModelDosen;

class Pendaftaran extends BaseController
{

    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelProdi = new ModelProdi();
        $this->ModelPersyaratan = new ModelPersyaratan();
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {

        $mhs = $this->ModelPendaftaran->dataMahasiswa();
        if ($mhs['status_pendaftaran'] == 0) {
            $data = [
                'judul' => 'Pendaftaran Wisuda',
                'menu' => 'pendaftaran',
                'mhs' =>  $mhs,
                'dosen' => $this->ModelDosen->allData(),
                'prodi' => $this->ModelProdi->allData(),
                'persyaratan' => $this->ModelPendaftaran->allJenisDokumen(),
                'dokumen' => $this->ModelPendaftaran->allDokumen(),
                'page'  => 'mahasiswa/v_pendaftaran_wisuda'
            ];
            return view('v_template_mahasiswa', $data);
        } elseif ($mhs['status_pendaftaran'] == 1) {
            $data = [
                'judul' => 'Pendaftaran Wisuda',
                'menu' => 'pendaftaran',
                'mhs' =>  $mhs,
                'prodi' => $this->ModelProdi->allData(),
                'dosen' => $this->ModelDosen->allData(),
                'persyaratan' => $this->ModelPendaftaran->allJenisDokumen(),
                'dokumen' => $this->ModelPendaftaran->allDokumen(),
                'page'  => 'mahasiswa/v_pendaftaran_terkirim'
            ];
            return view('v_template_mahasiswa', $data);
        } elseif ($mhs['status_pendaftaran'] == 2) {
            $data = [
                'judul' => 'Pendaftaran Wisuda',
                'menu' => 'pendaftaran',
                'mhs' =>  $mhs,
                'prodi' => $this->ModelProdi->allData(),
                'dosen' => $this->ModelDosen->allData(),
                'persyaratan' => $this->ModelPendaftaran->allJenisDokumen(),
                'dokumen' => $this->ModelPendaftaran->allDokumen(),
                'page'  => 'mahasiswa/v_pendaftaran_wisuda'
            ];
            return view('v_template_mahasiswa', $data);
        }
    }

    public function updateDataPendaftaran($npm)
    {
        if ($this->validate([
            'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'nik' => [
                'label' => 'NIK',
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
            'email' => [
                'label' => 'E-Mail',
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
            'no_telpon' => [
                'label' => 'Telepon',
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
            ], 'total_sks' => [
                'label' => 'Total SKS',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'ipk' => [
                'label' => 'IPK',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'judul_skripsi' => [
                'label' => 'Judul Skripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'pembimbing_ilmu' => [
                'label' => 'Pembimbing Ilmu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'pembimbing_agama' => [
                'label' => 'Pembimbing Agama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'tgl_lulus' => [
                'label' => 'Tanggal Lulus',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'tgl_wisuda' => [
                'label' => 'Tanggal Wisuda',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !'
                ]
            ], 'foto' => [
                'label' => 'Foto Mahasiswa',
                'rules'  => 'max_size[foto,1024]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Foto Tidak Boleh Lebih Dari 1024 KB',
                    'mime_in' => 'Foto Hanya Boleh Berformat JPG/JPEG',
                ]
            ],
        ])) {

            $mhs = $this->ModelPendaftaran->dataMahasiswa();
            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {
                $nama_file = $mhs['foto'];
            } else {
                # jika foto diganti
                $nama_file = $foto->getRandomName();
                $foto->move('foto', $nama_file);
            }

            $data = [
                'npm' => $npm,
                'nik' => $this->request->getPost('nik'),
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'no_telpon' => $this->request->getPost('no_telpon'),
                'id_prodi' => $this->request->getPost('id_prodi'),
                'total_sks' => $this->request->getPost('total_sks'),
                'ipk' => $this->request->getPost('ipk'),
                'judul_skripsi' => $this->request->getPost('judul_skripsi'),
                'pembimbing_ilmu' => $this->request->getPost('pembimbing_ilmu'),
                'pembimbing_agama' => $this->request->getPost('pembimbing_agama'),
                'tgl_lulus' => $this->request->getPost('tgl_lulus'),
                'tgl_wisuda' => $this->request->getPost('tgl_wisuda'),
                'foto' => $nama_file,
            ];
            $this->ModelPendaftaran->updateDataPendaftaran($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
            return redirect()->to('Pendaftaran');
        } else {
            return redirect()->to('Pendaftaran')->withInput();
        }
    }

    public function uploadDokumen($npm)
    {
        if ($this->validate([
            'id_persyaratan' => [
                'label' => 'Jenis Dokumen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'file_dokumen' => [
                'label' => 'File Dokumen',
                'rules'  => 'max_size[file_dokumen,1024]|ext_in[file_dokumen,jpg,jpeg,png,pdf]',
                'errors' => [
                    'max_size' => '{field} Tidak Boleh Lebih Dari 1024 KB',
                    'ext_in' => 'Foto Hanya Boleh Berformat jpg,jpeg,png,pdf',
                ]
            ],
        ])) {
            # jika lolos validasi
            $file_dokumen = $this->request->getFile('file_dokumen');
            $nama_file = $file_dokumen->getRandomName();

            $data = [
                'npm' => $npm,
                'id_persyaratan' => $this->request->getGetPost('id_persyaratan'),
                'file_dokumen'  => $nama_file,
            ];
            $file_dokumen->move('dokumen', $nama_file);
            $this->ModelPendaftaran->insertDokumen($data);
            session()->setFlashdata('pesan', 'File Dokumen Berhasil Ditambahkan !!');
            return redirect()->to('Pendaftaran');
        } else {
            # jika gagal validasi
            return redirect()->to('Pendaftaran')->withInput();
        }
    }

    public function deleteDokumen($id_dokumen)
    {
        $data = [
            'id_dokumen' => $id_dokumen,
        ];
        $this->ModelPendaftaran->deleteDokumen($data);
        session()->setFlashdata('pesan', 'File Dokumen Berhasil Dihapus !!');
        return redirect()->to('Pendaftaran');
    }

    public function kirimPendaftaran($npm)
    {
        $data = [
            'npm' => $npm,
            'status_pendaftaran' => 1,
        ];
        $this->ModelPendaftaran->updateDataPendaftaran($data);
        session()->setFlashdata('pesan', 'Pendaftaran Telah Berhasil Dikirim !');
        return redirect()->to('Pendaftaran');
    }
}
