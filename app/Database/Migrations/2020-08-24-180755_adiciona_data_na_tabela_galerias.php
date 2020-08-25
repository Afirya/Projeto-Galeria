<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionaDataNaTabelaGalerias extends Migration
{
	public function up()
	{
	    $data = [
            'data' => ['type' => 'DATETIME']
        ];
        $this->forge->addColumn('galerias', $data);
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropColumn('galerias', 'data');
	}
}
