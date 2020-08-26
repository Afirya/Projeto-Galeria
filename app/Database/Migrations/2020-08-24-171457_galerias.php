<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galerias extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('galerias');
	}

	public function down()
	{
        $this->forge->dropTable('galerias');
	}
}
