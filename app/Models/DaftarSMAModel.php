<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSMAModel extends Model
{
    protected $table = 'teman_sma';
    protected $primaryKey = 'id_teman_sma';
    protected $allowedFields = ['nama_teman_sma', 'id_kategori_teman'];
    protected $useTimestamps = false;

    public function getTemanWithKategori()
    {
        return $this->select('teman_sma.id_teman_sma, teman_sma.nama_teman_sma, kategori_teman.kategori_teman')
                    ->join('kategori_teman', 'teman_sma.id_kategori_teman = kategori_teman.id_kategori_teman')
                    ->findAll();
    }

    public function simpanTeman($data)
    {
        return $this->insert($data);
    }
}
