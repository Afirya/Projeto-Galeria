<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $imagens= [
            "/imagens/cachorro-nao-bebe-agua-pet.jpg",
            "/imagens/mato.jpg",
            "/imagens/fotografia.jpg",
            "/imagens/bus.jpg",
            "/imagens/pra.jpg",
        ];

        $data['imagens']   = $imagens;
		echo view('home', $data);
	}
}
