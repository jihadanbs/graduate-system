<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboardDosen extends Model
{
    public function dataMahasiswaBimbinganIlmu()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->get()->getResultArray();
    }

    public function dataMahasiswaBimbinganAgama()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_agama', session()->get('nama_dosen'))
            ->get()->getResultArray();
    }

    public function dataSuratUndangan()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->orWhere('pembimbing_agama', session()->get('nama_dosen'))
            ->get()->getResultArray();
    }

    public function dataBeritaAcara()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->orWhere('pembimbing_agama', session()->get('nama_dosen'))
            ->get()->getResultArray();
    }

    public function totalDataMahasiswaBimbinganIlmu()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->countAllResults();
    }

    public function totalDataMahasiswaBimbinganAgama()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_agama', session()->get('nama_dosen'))
            ->countAllResults();
    }

    public function totalDataSuratUndangan()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->orWhere('pembimbing_agama', session()->get('nama_dosen'))
            ->countAllResults();
    }

    public function totalDataBeritaAcara()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('pembimbing_ilmu', session()->get('nama_dosen'))
            ->orWhere('pembimbing_agama', session()->get('nama_dosen'))
            ->countAllResults();
    }
}
