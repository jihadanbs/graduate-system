<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboardStaf extends Model
{
    public function dataPendaftaranMasuk()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('status_pendaftaran', 1)
            ->where('status_dokumen', 0)
            ->get()->getResultArray();
    }

    public function cekPendaftaranMasuk($npm)
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('npm', $npm)
            ->get()->getRowArray();
    }

    public function allDokumen($npm)
    {
        return $this->db->table('tbl_dokumen')
            ->join('tbl_persyaratan', 'tbl_persyaratan.id_persyaratan=tbl_dokumen.id_persyaratan', 'LEFT')
            ->where('tbl_dokumen.npm', $npm)
            ->get()->getResultArray();
    }

    public function jumlahPendaftaranMasuk()
    {
        return $this->db->table('tbl_mahasiswa')
            ->where('status_pendaftaran', 1)
            ->where('status_dokumen', 0)
            ->countAllResults();
    }

    public function dataCalonWisudawan()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('status_pendaftaran', 1)
            ->where('status_dokumen', 1)
            ->get()->getResultArray();
    }
}
