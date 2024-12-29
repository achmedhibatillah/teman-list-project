<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSDModel extends Model
{
    protected $table = 'teman_sd';
    protected $primaryKey = 'id_teman_sd';
    protected $allowedFields = ['nama_teman_sd', 'id_kategori_teman'];
    protected $useTimestamps = false;

    public function getTemanWithKategori()
    {
        return $this->select('teman_sd.id_teman_sd, teman_sd.nama_teman_sd, kategori_teman.kategori_teman')
                    ->join('kategori_teman', 'teman_sd.id_kategori_teman = kategori_teman.id_kategori_teman')
                    ->findAll();
    }
    
    public function simpanTeman($data)
    {
        return $this->insert($data);
    }
}
