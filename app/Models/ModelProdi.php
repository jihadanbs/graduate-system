<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProdi extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_prodi')
            ->get()->getResultArray();
    }


    public function jumlahProdi()
    {
        return $this->db->table('tbl_prodi')
            ->countAllResults();
    }
}
