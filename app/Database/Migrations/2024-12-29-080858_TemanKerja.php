<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TemanKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_teman_kerja'      => ['type' => 'INT', 'auto_increment' => true],
            'nama_teman_kerja'    => ['type' => 'VARCHAR', 'constraint' => '255'],
            'id_kategori_teman' => ['type' => 'INT', 'null' => true],
        ]);
        $this->forge->addKey('id_teman_kerja', true);
        $this->forge->addForeignKey('id_kategori_teman', 'kategori_teman', 'id_kategori_teman', 'CASCADE', 'CASCADE');
        $this->forge->createTable('teman_kerja');
    }

    public function down()
    {
        $this->forge->dropTable('teman_kerja');
    }
}
