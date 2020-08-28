<?php namespace App\Controllers;

class Sobre extends BaseController
{
	public function index()
	{
		$data["titulo"] = "Sobre";
        return view('sobre',$data);
	}
}
