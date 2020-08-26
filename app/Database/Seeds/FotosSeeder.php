<?php namespace App\Database\Seeds;

class FotosSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho'    => '/imagens/cachorro-nao-bebe-agua-pet.jpg',
                'data' => '2000-08-10 15:04:22'
            ],
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho'    => '/imagens/fotografia.jpg',
                'data' => '2000-08-12 15:04:22'
            ],
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho' => '/imagens/mato.jpg',
                'data' => '2000-08-11 15:04:22'
            ],
            [
                'id' => null,
                'id_galeria' => '2',
                'caminho' => '/imagens/bus.jpg',
                'data' => '2000-08-13 15:04:22'
            ],
            [
                'id' => null,
                'id_galeria' => '2',
                'caminho' => '/imagens/pra.jpg',
                'data' => '2000-08-16 15:04:22'
            ],
        ];

        $this->db->table('fotos')->insertBatch($data);
    }
}