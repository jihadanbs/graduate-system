<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->orderBy('id_mahasiswa', 'DESC')
            ->get()->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_mahasiswa')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_mahasiswa')
            ->where('id_mahasiswa', $data['id_mahasiswa'])
            ->delete($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_mahasiswa')
            ->where('id_mahasiswa', $data['id_mahasiswa'])
            ->update($data);
    }


    public function dataCalonWisudawan()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('status_pendaftaran', 1)
            ->get()->getResultArray();
    }

    public function detailCalonWisudawan($id_mahasiswa)
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->get()->getRowArray();
    }

    public function jumlahWisudawan()
    {
        return $this->db->table('tbl_mahasiswa')
            ->where('status_dokumen', 1)
            ->countAllResults();
    }

    public function jumlahMahasiswa()
    {
        return $this->db->table('tbl_mahasiswa')
            ->countAllResults();
    }
}
