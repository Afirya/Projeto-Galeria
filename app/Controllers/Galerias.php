<?php namespace App\Controllers;

class Galerias extends BaseController
{
    public function index() {

        $galerias = [
            "Galeria 1",
            "Galeria 2",
            "Galeria 3",
            "Galeria 4",
            "Galeira 5"
        ];

        $data["galerias"] = $galerias;
        $data["titulo"] = "Lista de Galerias";
        echo view('lista-galerias', $data);
    }
}