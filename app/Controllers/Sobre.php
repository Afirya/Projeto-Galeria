<?php namespace App\Controllers;

class Galeria extends BaseController
{
	public function index($a)
	{
        $db = \Config\Database::connect();
        $query = $db->query("select * from fotos where idgaleria = $a;");
        $imagens = $query->getResult();

        $data["titulo"] = "Galeria";
        $data["imagens"] = $imagens;
        echo view('galeria', $data);
	}
}
