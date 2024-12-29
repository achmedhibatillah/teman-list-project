<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarKuliahModel extends Model
{
    protected $table = 'teman_kuliah';
    protected $primaryKey = 'id_teman_kuliah';
    protected $allowedFields = ['nama_teman_kuliah', 'id_kategori_teman'];
    protected $useTimestamps = false;

    public function getTemanWithKategori()
    {
        return $this->select('teman_kuliah.id_teman_kuliah, teman_kuliah.nama_teman_kuliah, kategori_teman.kategori_teman')
                    ->join('kategori_teman', 'teman_kuliah.id_kategori_teman = kategori_teman.id_kategori_teman')
                    ->findAll();
    }

    public function simpanTeman($data)
    {
        return $this->insert($data);
    }
}
