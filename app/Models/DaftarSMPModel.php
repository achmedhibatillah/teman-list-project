<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSMPModel extends Model
{
    protected $table = 'teman_smp';
    protected $primaryKey = 'id_teman_smp';
    protected $allowedFields = ['nama_teman_smp', 'id_kategori_teman'];
    protected $useTimestamps = false;

    public function getTemanWithKategori()
    {
        return $this->select('teman_smp.id_teman_smp, teman_smp.nama_teman_smp, kategori_teman.kategori_teman')
                    ->join('kategori_teman', 'teman_smp.id_kategori_teman = kategori_teman.id_kategori_teman')
                    ->findAll();
    }

    public function simpanTeman($data)
    {
        return $this->insert($data);
    }
}
