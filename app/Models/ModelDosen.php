<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_dosen')
            ->get()->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_dosen')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_dosen')
            ->where('id_dosen', $data['id_dosen'])
            ->delete($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_dosen')
            ->where('id_dosen', $data['id_dosen'])
            ->update($data);
    }

    public function jumlahDosen()
    {
        return $this->db->table('tbl_dosen')
            ->countAllResults();
    }
}
