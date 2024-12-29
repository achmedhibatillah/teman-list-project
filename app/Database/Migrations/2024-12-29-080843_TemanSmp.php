<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TemanSmp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_teman_smp'      => ['type' => 'INT', 'auto_increment' => true],
            'nama_teman_smp'    => ['type' => 'VARCHAR', 'constraint' => '255'],
            'id_kategori_teman' => ['type' => 'INT', 'null' => true],
        ]);
        $this->forge->addKey('id_teman_smp', true);
        $this->forge->addForeignKey('id_kategori_teman', 'kategori_teman', 'id_kategori_teman', 'CASCADE', 'CASCADE');
        $this->forge->createTable('teman_smp');
    }

    public function down()
    {
        $this->forge->dropTable('teman_smp');
    }
}
