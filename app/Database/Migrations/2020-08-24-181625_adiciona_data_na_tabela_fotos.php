<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionaDataNaTabelaFotos extends Migration
{
    public function up()
    {
        $data = [
            'data' => ['type' => 'DATETIME']
        ];

        $this->forge->addColumn('fotos', $data);
    }

    public function down()
    {
        $this->forge->dropColumn('fotos', 'data');
    }
}
