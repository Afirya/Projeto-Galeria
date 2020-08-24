<?php namespace App\Database\Seeds;

class FotosSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho'    => '/imagens/cachorro-nao-bebe-agua-pet.jpg'
            ],
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho'    => '/imagens/fotografia.jpg'
            ],
            [
                'id' => null,
                'id_galeria' => '1',
                'caminho'    => '/imagens/mato.jpg'
            ],
            [
                'id' => null,
                'id_galeria' => '2',
                'caminho'    => '/imagens/bus.jpg'
            ],
            [
                'id' => null,
                'id_galeria' => '2',
                'caminho'    => '/imagens/pra.jpg'
            ],
        ];

        $this->db->table('fotos')->insertBatch($data);
    }
}