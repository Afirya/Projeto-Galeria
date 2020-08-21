<?php namespace App\Controllers;

class Galerias extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from galerias;");
        $galerias = $query->getResult();

        $data["galerias"] = $galerias;
        $data["titulo"] = "Lista de Galerias";
        echo view('lista-galerias', $data);
    }
}