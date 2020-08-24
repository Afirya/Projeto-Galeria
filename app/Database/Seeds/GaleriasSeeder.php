<?php namespace App\Database\Seeds;

class GaleriasSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => null,
                'nome'    => 'Galeria 1'
            ],
            [
                'id' => null,
                'nome'    => 'Galeria 2'
            ],
            [
                'id' => null,
                'nome'    => 'Galeria 3'
            ],
            [
                'id' => null,
                'nome'    => 'Galeria 4'
            ],
            [
                'id' => null,
                'nome'    => 'Galeria 5'
            ]
        ];

        $this->db->table('galerias')->insertBatch($data);
    }
}