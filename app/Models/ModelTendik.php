<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTendik extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_tendik')
            ->get()->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_tendik')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_tendik')
            ->where('id_tendik', $data['id_tendik'])
            ->delete($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_tendik')
            ->where('id_tendik', $data['id_tendik'])
            ->update($data);
    }
}
