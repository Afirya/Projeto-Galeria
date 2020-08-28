<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query = $db->query("select * from fotos ORDER BY rand() limit 0, 16");
		$imagens = $query->getResult();

		$data ["imagens"] = $imagens;
		$data["titulo"] = "Home";

        return view('home', $data);
	}
}
