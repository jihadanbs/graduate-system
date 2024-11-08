<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
    public function dataMahasiswa()
    {
        return $this->db->table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi=tbl_mahasiswa.id_prodi', 'LEFT')
            ->where('npm', session()->get('npm'))
            ->get()->getRowArray();
    }

    public function updateDataPendaftaran($data)
    {
        $this->db->table('tbl_mahasiswa')
            ->where('npm', $data['npm'])
            ->update($data);
    }

    public function insertDokumen($data)
    {
        $this->db->table('tbl_dokumen')->insert($data);
    }

    public function allDokumen()
    {
        return $this->db->table('tbl_dokumen')
            ->join('tbl_persyaratan', 'tbl_persyaratan.id_persyaratan=tbl_dokumen.id_persyaratan', 'LEFT')
            ->where('tbl_dokumen.npm', session()->get('npm'))
            ->get()->getResultArray();
    }

    public function allJenisDokumen()
    {
        $dok = $this->db->table('tbl_dokumen')->where('npm', session()->get('npm'))->get()->getResultArray();
        if ($dok <> null) {
            foreach ($dok as $key => $value) {
                $id_persyaratan[] = $value['id_persyaratan'];
            }
        } else {
            $id_persyaratan[] = 0;
        }
        return $this->db->table('tbl_persyaratan')
            ->whereNotIn('id_persyaratan', $id_persyaratan)
            ->get()->getResultArray();
    }

    public function deleteDokumen($data)
    {
        $this->db->table('tbl_dokumen')
            ->where('id_dokumen', $data['id_dokumen'])
            ->delete($data);
    }
}
