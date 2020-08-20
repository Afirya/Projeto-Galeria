<?php namespace App\Controllers;

class Galeria extends BaseController
{
	public function index($a)
	{
	    $galerias = [
            [
                "/imagens/cachorro-nao-bebe-agua-pet.jpg",
                "/imagens/mato.jpg",
                "/imagens/fotografia.jpg",
            ],
            [
                "/imagens/bus.jpg",
                "/imagens/pra.jpg",
            ],

        ];

        $data["titulo"] = "Galeria";
        $data["imagens"] = $galerias[$a];
        echo view('galeria', $data);
	}
}
