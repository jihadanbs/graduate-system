<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function loginTendik($username, $password)
    {
        return $this->db->table('tbl_tendik')->where([
            'username' => $username,
            'password' => $password
        ])->get()->getRowArray();
    }

    public function loginMahasiswa($username, $password)
    {
        return $this->db->table('tbl_mahasiswa')->where([
            'npm' => $username,
            'password' => $password
        ])->get()->getRowArray();
    }

    public function loginDosen($username, $password)
    {
        return $this->db->table('tbl_dosen')->where([
            'nidn' => $username,
            'password' => $password
        ])->get()->getRowArray();
    }
}
