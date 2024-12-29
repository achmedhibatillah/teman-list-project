<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarKerjaModel extends Model
{
    protected $table = 'teman_kerja';
    protected $primaryKey = 'id_teman_kerja';
    protected $allowedFields = ['nama_teman_kerja', 'id_kategori_teman'];
    protected $useTimestamps = false;

    public function getTemanWithKategori()
    {
        return $this->select('teman_kerja.id_teman_kerja, teman_kerja.nama_teman_kerja, kategori_teman.kategori_teman')
                    ->join('kategori_teman', 'teman_kerja.id_kategori_teman = kategori_teman.id_kategori_teman')
                    ->findAll();
    }

    public function simpanTeman($data)
    {
        return $this->insert($data);
    }
}
