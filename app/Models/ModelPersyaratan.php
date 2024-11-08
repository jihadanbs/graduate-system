<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPersyaratan extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_persyaratan')
            ->get()->getResultArray();
    }

   

    public function insertData($data)
    {
        $this->db->table('tbl_persyaratan')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_persyaratan')
            ->where('id_persyaratan', $data['id_persyaratan'])
            ->delete($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_persyaratan')
            ->where('id_persyaratan', $data['id_persyaratan'])
            ->update($data);
    }
}
