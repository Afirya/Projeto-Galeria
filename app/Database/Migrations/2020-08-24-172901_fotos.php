<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fotos extends Migration
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
            'id_galeria'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'caminho'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '250',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('fotos');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('fotos');
	}
}
