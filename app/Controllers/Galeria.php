<?php namespace App\Controllers;

class Galeria extends BaseController
{
	public function index($id_galeria)
	{
        $db = \Config\Database::connect();
        $query = $db->query("select * from fotos where id_galeria = $id_galeria");
        $imagens = $query->getResult();

        $data["titulo"] = "Galeria";
        $data["imagens"] = $imagens;
        $data["id_galeria"] = $id_galeria;

        echo view('galeria', $data);
	}

	public function remover($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("delete from galerias where id = $id;");

        return redirect()->to('/lista-galeria');
    }

    public function adicionar()
    {
		$data["titulo"] = "Criar galeria";

        echo view('criar-galeria',$data);
    }

    public function criar()
    {
        $nome = $_POST['nome'];
        $data = date('Y-m-d H:i:s');
        $db = \Config\Database::connect();
        $db->table('galerias')->insert([
            'nome' => $nome,
            'data' => $data
        ]);

        return redirect()->to('/lista-galeria');
    }

    public function adicionar_imagem($id_galeria)
    {
        $data["id_galeria"] = $id_galeria;
        $data["mensagem"] = "";
		$data["titulo"] = "Adicionar foto";

        echo view('subir-imagem',$data);
    }

    public function subir_imagem($id_galeria)
    {
        helper('text');

        $validação = $this->validate([
            'imagem' => 'uploaded[imagem]|max_size[imagem,2000]|max_dims[imagem,718,482]|ext_in[imagem,jpg,jpeg,png]'
       ]);

        if($validação == false)
        {
            $data["id_galeria"] = $id_galeria;
            $data["mensagem"] = "Imagem fora do padrão, selecione outra.";

            echo view('subir-imagem',$data);
        }
        else
        {
            $letras_aleatorias = random_string('alnum', 8);

            $nome_da_imagem = implode('-', [
                $id_galeria,
                date('Y-m-d_H:i:s'),
                $letras_aleatorias,
                $_FILES["imagem"]["name"],
            ]);
            $caminho = FCPATH . 'imagens/' . $nome_da_imagem;

            $db = \Config\Database::connect();
            $db->table('fotos')->insert([
                'id_galeria' => $id_galeria,
                'caminho' => '/imagens/' . $nome_da_imagem,
                'data' => date('Y-m-d H:i:s')
            ]);
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho);

            return redirect()->to("/galeria/$id_galeria");
        }
    }


}
