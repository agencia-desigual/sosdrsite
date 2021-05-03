<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Painel extends CI_Controller
{

  // Método construtor da classe
	function __construct()
	{
		parent::__construct();
		$this->load->model("Usuario_model","usuario");
		$this->load->model("Servico_model","servico");
		$this->load->model("Blog_model","blog");
	}

	public function dashboard()
	{
	    $buscaServicos = $this->servico->num_rows();
	    $buscaUsuarios = $this->usuario->num_rows();

	    $dados = array(
	        "servicos" => $buscaServicos,
            "usuarios" => $buscaUsuarios
        );

	    // Verificando se está logado
        $this->VerificaLogin();
		$this->load->view("default/painel/dashboard",$dados);

	}

    public function servicos()
    {
        // Verificando se está logado
        $this->VerificaLogin();

        // Busca os dados de todos os usuarios
        $servicos = $this->servico->get();

        $dados = array(
            "servicos" => $servicos
        );

        $this->load->view("default/painel/servicos",$dados);

    }

    public function servicosEditar($param){

	    $busca = $this->servico->get(['Id' => $param]);

	    $dados = array(
	        "servico" => $busca
        );


        $this->load->view("default/painel/servicos-form", $dados);
    }

    public function servicosCadastrar(){
        $this->load->view("default/painel/servicos-form");
    }

    public function usuarios()
    {
        // Verificando se está logado
        $this->VerificaLogin();
        $this->load->view("default/painel/usuarios");

    }

    public function blog()
    {
        // Verificando se está logado
        $this->VerificaLogin();

        // Busca os dados
        $blog = $this->blog->get();

        $dados = array(
            "blog" => $blog
        );

        $this->load->view("default/painel/blog",$dados);
    }

    public function blogCadastrar()
    {
        // Verificando se está logado
        $this->VerificaLogin();
        $this->load->view("default/painel/blog-form");
    }

    public function blogEditar($param){

        $busca = $this->blog->get(['id_blog' => $param]);

        $dados = array(
            "blog" => $busca
        );

        $this->load->view("default/painel/blog-form", $dados);
    }



	// Carrega o formulario de login
	public function login()
	{
		$this->load->view("default/painel/login");
	}

	public function sair()
	{
	    unset($_SESSION['SOS-USUARIO']);

		// Manda para a Home
		redirect(base_url(),"location");
	}




    /*
     ==================================================
                        METODOS AJAX
     ==================================================
    */
    public function ajaxLogin()
    {
        if(isset($_POST)){

            $email = $_POST['email'];
            $senha = md5($_POST['senha']);

            //Busca o usuario
            $busca = $this->usuario->num_rows(["email" => $email, "senha" => $senha]);

            if($busca == 1){

                $usuario = $this->usuario->get(["email" => $email, "senha" => $senha]);


                $_SESSION['SOS-USUARIO']['NOME'] = $usuario[0]->nome;
                $_SESSION['SOS-USUARIO']['EMAIL'] = $usuario[0]->email;

                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Usuário logado com sucesso, aguarde"
                );

            }else{

                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Usuário não encontrado!"
                );

            }

        }else{

            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado"
            );

        }

        echo json_encode($dados);

    }

    public function ajaxExcluirServico($param)
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $quantidade = $this->servico->num_rows(["Id" => $param]);

        if($quantidade == 1){

            $busca = $this->servico->get(["Id" => $param]);

            if($this->servico->delete(["Id" => $busca[0]->Id])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Serviço excluído com sucesso!"
                );
            }else{
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Erro ao excluir"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Serviço não encontrado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxEditarServico()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){
            $imagem = null;
            $preco =  $this->Padrao($_POST['preco']);

            $id = $_POST['id'];


            // Verificando o status
            if(isset($_POST['status'])){ $status = 1; } else{ $status = 0; }
            // Verificando o tipo do preço
            if(!isset($_POST['tipo-preco'])){ $tipo_preco = "null"; } else { $tipo_preco = $_POST['tipo-preco']; }


            // Verificando se inseriu imagem
                if(isset($_FILES['imagem']['name'])){
                    if($_FILES['imagem']['size'] > 0){
                        //upload da imagem
                        $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/icones/servicos/site/",null,null,null);
                    }
                }

            $dadosServico = array(
                "categoria" => $_POST['categoria'],
                "nome" => $_POST['nome'],
                "status" => $status,
                "preco" => $preco,
                "descricao" => $_POST['descricao'],
                "tipo_preco" => $tipo_preco
            );

            if($imagem != null)
            {
                $dadosServico["imagem"] = $imagem;
            }



            //Inserindo o serviço
            if($this->servico->update($dadosServico, ["Id" => $id])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Serviço atualizado!"
                );
            }else{
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Ocorreu um erro"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxCadastrarServico()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            $preco =  $this->Padrao($_POST['Cadpreco']);

            // Verificando o status
            if(isset($_POST['Cadstatus'])){ $status = 1; } else{ $status = 0; }
            if(!isset($_POST['tipo-preco'])){ $tipo_preco = "null"; } else { $tipo_preco = $_POST['tipo-preco']; }


            // Verificando se inseriu imagem
            if(isset($_FILES['Cadimagem'])){

                //upload da imagem
                $imagem = $this->uploadFile($_FILES["Cadimagem"], "./arquivos/assets/img/icones/servicos/site/",null,null,null);

            }else{ $imagem = null; }


            $dadosServico = array(
                "categoria" => $_POST['Cadcategoria'],
                "nome" => $_POST['Cadnome'],
                "status" => $status,
                "descricao" => $_POST['Caddescricao'],
                "imagem" => $imagem,
                "preco" => $preco,
                "tipo_preco" => $tipo_preco
            );

            //Inserindo o serviço
            if($this->servico->insert($dadosServico)){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Serviço cadastrado!"
                );
            }else{
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Ocorreu um erro"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxCadastrarBlog()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            // Verificando se existe alguma url igual
            $url = $_POST['url'];

            //Buscando pela URL
            $busca = $this->blog->num_rows(['url' => $url]);

            if($busca < 1)
            {
                // Verificando o status
                if(isset($_POST['status'])){ $status = 1; } else{ $status = 0; }

                // Verificando se inseriu imagem
                if(isset($_FILES['imagem'])){

                    //upload da imagem
                    $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/blog/",null,null,null);

                }else{ $imagem = null; }

                $dadosBlog = array(
                    "url" => $url,
                    "titulo" => $_POST['titulo'],
                    "categoria" => $_POST['categoria'],
                    "descricao" => $_POST['descricao'],
                    "resumo" => $_POST['resumo'],
                    "status" => $status,
                    "tags" => $_POST['tags'],
                    "imagem" => $imagem,
                    "data" => date('Y-m-d')
                );

                //Inserindo o serviço
                if($this->blog->insert($dadosBlog)){
                    $dados = array(
                        "tipo" => true,
                        "mensagem" => "Publicação cadastrada!"
                    );
                }else{
                    $dados = array(
                        "tipo" => false,
                        "mensagem" => "Ocorreu um erro"
                    );
                }
            }
            else
            {
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Essa URL já existe, atualize o titulo"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxExcluirBlog($param)
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $quantidade = $this->blog->num_rows(["id_blog" => $param]);

        if($quantidade == 1){

            //Removendo a imagem de capa do servidor
            $busca = $this->blog->get(['id_blog' => $param]);

            //Removendo
            unlink('./arquivos/assets/img/blog/'.$busca[0]->imagem);


            if($this->blog->delete(["id_blog" => $param])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Publicação excluído com sucesso!"
                );
            }else{
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Erro ao excluir"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Publicação não encontrado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxEditarBlog()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            $imagem = null;
            $id = $_POST['id'];

            // Verificando o status
            if(isset($_POST['status'])){ $status = 1; } else{ $status = 0; }

            // Verificando se inseriu imagem
            if(isset($_FILES['imagem']['name'])){
                if($_FILES['imagem']['size'] > 0){

                    //Removendo a imagem antiga
                    $busca = $this->blog->get(['id_blog' => $id]);
                    //Removendo
                    unlink('./arquivos/assets/img/blog/'.$busca[0]->imagem);

                    //upload da nova imagem
                    $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/blog/",null,null,null);
                }
            }

            $dadosBlog = array(
                "titulo" => $_POST['titulo'],
                "categoria" => $_POST['categoria'],
                "descricao" => $_POST['descricao'],
                "resumo" => $_POST['resumo'],
                "tags" => $_POST['tags'],
                "status" => $status
            );

            //Se inseriu imagem adiciona na array
            if($imagem != null)
            {
                $dadosBlog["imagem"] = $imagem;
            }

            //Inserindo o serviço
            if($this->blog->update($dadosBlog, ["id_blog" => $id])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Publicação atualizada!"
                );
            }else{
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Ocorreu um erro"
                );
            }

        }else{
            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado"
            );
        }

        echo json_encode($dados);

    }




    /*
     ==================================================
                 FUNCTION DE SEGURANÇA
     ==================================================
    */
    function VerificaLogin(){

        if(!isset($_SESSION['SOS-USUARIO'])){
            header("location:".base_url()."painel/login");
        }

    }


    public function Padrao($param = null){
        $param = str_replace(".","",$param);
        $param = str_replace(",",".",$param);
        return $param;
    }

    // Método responsável por realizar upload de arquivos
    public function uploadFile($arquivo = null, $caminho = null, $nome = null)
    {
        // Verifica se o nome foi adicionado
        if($nome == null)
        {
            $nome = date("Y-m-d-his");
        }

        // Pega a extensão
        $ext = explode(".",basename($arquivo['name']));
        $ext = end($ext);

        // Seta o nome do arquivo
        $nome .= "." . $ext;

        // Caminho
        $caminho .= "/" . $nome;

        if(move_uploaded_file($arquivo['tmp_name'], $caminho))
        {
            return $nome;
        }
        else
        {
            return false;
        }

    } // END >> Fun::uploadFile()

    public static function url($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

}
