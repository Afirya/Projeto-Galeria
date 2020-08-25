<?php namespace App\Controllers;

class Galeria extends BaseController
{
	public function index($a)
	{
        $db = \Config\Database::connect();
        $query = $db->query("select * from fotos where id_galeria = $a;");
        $imagens = $query->getResult();

        $data["titulo"] = "Galeria";
        $data["imagens"] = $imagens;
        echo view('galeria', $data);
	}

	public function remover($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("delete from galerias where id = $id;");
        return redirect()->to('/');
    }

    public function adicionar()
    {
       echo view('criar-galeria');
    }

    public function criar()
    {
        $nome = $_POST['nome'];
        $data = date('Y-m-d H:i:s');;
        $db = \Config\Database::connect();
        $db->table('galerias')->insert([
            'nome' => $nome,
            'data' => $data
        ]);
        return redirect()->to('/');
    }
}
