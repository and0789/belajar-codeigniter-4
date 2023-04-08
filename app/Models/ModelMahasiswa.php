<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    // tampil data
    public function AllData()
    {
        return $this->db->table('tbl_mahasiswa')
            ->Get()->getResultArray();
    }

    // tambah data
    public function InsertData($data)
    {
        $this->db->table('tbl_mahasiswa')->insert($data);
    }
}
