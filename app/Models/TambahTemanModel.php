<?php

namespace App\Models;

use CodeIgniter\Model;

class TambahTemanModel extends Model
{
    protected $table      = '';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_teman', 'kategori_teman'];

    // Fungsi untuk mendapatkan kategori teman
    public function getKategoriTeman() {
        $builder = $this->db->table('kategori_teman');
        return $builder->get()->getResult();
    }

    // Fungsi untuk menentukan nama tabel berdasarkan jenjang
    private function getTableByJenjang($jenjang) {
        switch ($jenjang) {
            case 'SD':
                return 'teman_sd';
            case 'SMP':
                return 'teman_smp';
            case 'SMA':
                return 'teman_sma';
            case 'Kuliah':
                return 'teman_kuliah';
            case 'Kerja':
                return 'teman_kerja';
            default:
                return null;
        }
    }

    // Fungsi untuk menambah teman ke dalam tabel sesuai jenjang
    public function tambahTeman($data, $jenjang) {
        $this->table = $this->getTableByJenjang($jenjang);
        if ($this->table) {
            return $this->insert($data);
        }
        return false;
    }
}
