<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriTeman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori_teman' => ['type' => 'INT', 'auto_increment' => true],
            'kategori_teman'    => ['type' => 'VARCHAR', 'constraint' => '255'],
        ]);
        $this->forge->addKey('id_kategori_teman', true);
        $this->forge->createTable('kategori_teman');

        $data = [
            ['kategori_teman' => 'Dekat'],
            ['kategori_teman' => 'Curhat'],
            ['kategori_teman' => 'Nongkrong'],
            ['kategori_teman' => 'Organisasi'],
            ['kategori_teman' => 'Belajar']
        ];
        $this->db->table('kategori_teman')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('kategori_teman');
    }
}
