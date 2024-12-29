<?php

namespace App\Models;

use CodeIgniter\Model;

class ListTemanModel extends Model
{
    protected $table = 'teman_sd';
    protected $primaryKey = 'id_teman_sd';
    
    public function getFriendsByCategory()
    {
        $builder = $this->db->table('kategori_teman');
        
        $builder->select('nama_teman_sd as nama_teman, kategori_teman.kategori_teman, "SD" as jenjang')
                ->join('teman_sd', 'teman_sd.id_kategori_teman = kategori_teman.id_kategori_teman', 'left')
            ->union(
                $this->db->table('teman_smp')
                         ->select('nama_teman_smp as nama_teman, kategori_teman.kategori_teman, "SMP" as jenjang')
                         ->join('kategori_teman', 'teman_smp.id_kategori_teman = kategori_teman.id_kategori_teman', 'left')
            )
            ->union(
                $this->db->table('teman_sma')
                         ->select('nama_teman_sma as nama_teman, kategori_teman.kategori_teman, "SMA" as jenjang')
                         ->join('kategori_teman', 'teman_sma.id_kategori_teman = kategori_teman.id_kategori_teman', 'left')
            )
            ->union(
                $this->db->table('teman_kuliah')
                         ->select('nama_teman_kuliah as nama_teman, kategori_teman.kategori_teman, "Kuliah" as jenjang')
                         ->join('kategori_teman', 'teman_kuliah.id_kategori_teman = kategori_teman.id_kategori_teman', 'left')
            )
            ->union(
                $this->db->table('teman_kerja')
                         ->select('nama_teman_kerja as nama_teman, kategori_teman.kategori_teman, "Kerja" as jenjang')
                         ->join('kategori_teman', 'teman_kerja.id_kategori_teman = kategori_teman.id_kategori_teman', 'left')
            );
        
        $result = $builder->get()->getResultArray();

        return $result;
    }
}
