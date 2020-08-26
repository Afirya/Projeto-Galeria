<?php namespace App\Database\Seeds;

class GaleriasSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => null,
                'nome' => 'Galeria 1',
                'data' => '2000-08-16 15:04:22'
            ],
            [
                'id' => null,
                'nome' => 'Galeria 2',
                'data' => '2000-08-16 15:04:22'
            ],
            [
                'id' => null,
                'nome' => 'Galeria 3',
                'data' => '2000-08-16 15:04:22'
            ],
            [
                'id' => null,
                'nome' => 'Galeria 4',
                'data' => '2000-08-16 15:04:22'
            ],
            [
                'id' => null,
                'nome' => 'Galeria 5',
                'data' => '2000-08-16 15:04:22'
            ]
        ];

        $this->db->table('galerias')->insertBatch($data);
    }
}