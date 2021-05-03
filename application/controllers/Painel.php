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
		$this->load->model("Unidade_model","unidade");
		$this->load->model("Blog_model","blog");
		$this->load->model("ServicoUnidade_model","servicoUnidade");
		$this->load->model("Lead_model","lead");
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

//        foreach ($servicos as $servico)
//        {
//            if(!empty($servico->id_unidade))
//            {
//                $unidade = $this->unidade->get(["id_unidades" => $servico->id_unidade]);
//                $servico->unidade = $unidade[0]->nome;
//            }
//        }

//        echo "<pre>";
//        print_r($servico);
//        echo "</pre>";
//        exit;

        $dados = array(
            "servicos" => $servicos
        );

        $this->load->view("default/painel/servicos",$dados);

    }

    public function servicosEditar($param){

	    $busca = $this->servico->get(['Id' => $param]);

        $unidades = $this->unidade->get();

        $unidadeServicos = $this->servicoUnidade->get(['id_servico' => $param]);

        if (!empty($unidadeServicos))
        {
            foreach ($unidadeServicos as $unidadeServico)
            {

                // Busca o nome da unidade
                $nomeUnidade = $this->unidade->get(['id_unidades' => $unidadeServico->id_unidade]);
                $unidadeServico->nome = $nomeUnidade[0]->nome;
            }
        }

        $dados = array(
	        "servico" => $busca,
            "unidades" => $unidades,
            "unidadeServicos" => $unidadeServicos
        );


        $this->load->view("default/painel/servicos-form", $dados);
    }

    public function servicosCadastrar(){

        $unidades = $this->unidade->get();

        $dados = array(
            "unidades" => $unidades
        );


        $this->load->view("default/painel/servicos-form",$dados);
    }

    public function usuarios()
    {
        // Verificando se está logado
        $this->VerificaLogin();

        // Busca os dados de todos os usuarios
        $usuarios = $this->usuario->get();

        $dados = array(
            "usuarios" => $usuarios
        );

//        echo "<pre>";
//        print_r($usuarios);
//        echo "</pre>";
//        exit;

        $this->load->view("default/painel/usuarios",$dados);

    }

    public function usuarioEditar($param){

        // Verificando se está logado
        $this->VerificaLogin();

        $usuario = $this->usuario->get(['Id' => $param]);

        $dados = array(
            "usuario" => $usuario
        );

        $this->load->view("default/painel/usuario-form", $dados);
    }

    public function usuarioCadastrar()
    {
        // Verificando se está logado
        $this->VerificaLogin();

        $this->load->view("default/painel/usuario-form");
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

    // Leads
    public function leads()
    {
        // Verificando se está logado
        $this->VerificaLogin();

        // Busca os dados de todos os leads
        $leads = $this->lead->get();

        if(!empty($leads))
        {
            foreach ($leads as $lead)
            {
                // Busca a unidade
                $unidade = $this->unidade->get(["id_unidades" => $lead->id_unidade]);

                // Vincula
                $lead->unidade = $unidade[0];

            }
        }

//        echo "<pre>";
//        print_r($leads);
//        echo "</pre>";
//        exit;

        $dados = array(
            "leads" => $leads
        );

        $this->load->view("default/painel/leads",$dados);

    }

    // Unidades
    public function unidades()
{
    // Verificando se está logado
    $this->VerificaLogin();

    // Busca os dados de todos os usuarios
    $unidades = $this->unidade->get();

    $dados = array(
        "unidades" => $unidades
    );

    $this->load->view("default/painel/unidades",$dados);

}

    public function unidadesEditar($param){

        $unidade = $this->unidade->get(['id_unidades' => $param]);

        $dados = array(
            "unidade" => $unidade
        );

        $this->load->view("default/painel/unidades-form", $dados);
    }

    public function unidadesCadastrar(){
        $this->load->view("default/painel/unidades-form");
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


//        echo "<pre>";
//        print_r($_POST);
//        echo "</pre>";
//        exit;

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            $imagem = null;
            $tipo_preco =  $_POST['tipo_preco'];
            $preco =  '';
            $id = $_POST['id'];


            // Verificando a unidade
            if(!empty($_POST['unidade']))
            {

                $precoUnidade = $this->Padrao($_POST['valorUnidade']);

                $salvaUnidade = [
                    "id_servico" => $id,
                    "id_unidade" => $_POST['unidade'],
                    "tipo_preco" => $tipo_preco,
                    "preco" => $precoUnidade
                ];

                //Inserindo o serviço unidade
                $this->servicoUnidade->insert($salvaUnidade);
            }

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

//        echo "<pre>";
//        print_r($_POST);
//        echo "</pre>";
//        exit;

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

//            $preco =  $this->Padrao($_POST['Cadpreco']);
            $preco = '';

            // Verificando o status
            if(isset($_POST['Cadstatus'])){ $status = 1; } else{ $status = 0; }
            if(!isset($_POST['tipo-preco'])){ $tipo_preco = "null"; } else { $tipo_preco = $_POST['tipo-preco']; }

            // Verificando a unidade
            if(isset($_POST['id_unidade'])){ $unidade = $_POST['id_unidade']; } else{ $unidade = ""; }

            $salva = [];

            if (!empty($unidade))
            {

                foreach ($unidade as $uni)
                {
                    $salva[] = ["id" => $uni, "valor" => $preco];
                }

            }

            // Verificando se inseriu imagem
            if(isset($_FILES['Cadimagem'])){

                //upload da imagem
                $imagem = $this->uploadFile($_FILES["Cadimagem"], "./arquivos/assets/img/icones/servicos/site/",null,null,null);

            }else{ $imagem = null; }


            $dadosServico = array(
                "id_unidade" =>  json_encode($salva),
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

                // Verificando o destaque
                if(isset($_POST['destaque'])){ $destaque = 1; } else{ $destaque = 0; }

                // Verificando se inseriu imagem
                if(isset($_FILES['imagem'])){

                    //upload da imagem
                    $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/blog/",null,null,null);

                }else{ $imagem = null; }

                $dadosBlog = array(
                    "url" => $url,
                    "titulo" => $_POST['titulo'],
                    "categoria" =>  strtolower($_POST['categoria']),
                    "destaque" => $destaque,
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

            // Verificando o destaque
            if(isset($_POST['destaque'])){ $destaque = 1; } else{ $destaque = 0; }

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
                "destaque" => $destaque,
                "categoria" => strtolower($_POST['categoria']),
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

    public function ajaxExcluirUnidadeServico($param)
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $quantidade = $this->servicoUnidade->num_rows(["id_unidade_servico" => $param]);

        if($quantidade == 1){

            $busca = $this->servicoUnidade->get(["id_unidade_servico" => $param]);

            if($this->servicoUnidade->delete(["id_unidade_servico" => $busca[0]->id_unidade_servico])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Unidade excluída com sucesso!"
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
                "mensagem" => "Unidade não encontrado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxExcluirUnidade($param)
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $quantidade = $this->unidade->num_rows(["id_unidades" => $param]);

        if($quantidade == 1){

            $busca = $this->unidade->get(["id_unidades" => $param]);

            if($this->unidade->delete(["id_unidades" => $busca[0]->id_unidades])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Unidade excluída com sucesso!"
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
                "mensagem" => "Unidade não encontrado"
            );
        }

        echo json_encode($dados);

    }

    public function ajaxEditarUnidade()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            // Pegando o id
            $id = $_POST['id_unidades'];

            $imagem = null;

            $dadosUnidade = array(
                "nome" => $_POST['nome'],
                "endereco" => $_POST['endereco'],
                "cep" => $_POST['cep'],
                "estado" => $_POST['estado'],
                "cidade" => $_POST['cidade'],
                "numero" => $_POST['numero'],
                "telefone" => $_POST['telefone'],
                "referencia" => $_POST['referencia'],
                "email_contato" => $_POST['email_contato'],
                "email_trabalhe_conosco" => $_POST['email_trabalhe_conosco']
            );

            // Verificando se inseriu imagem
            if($_FILES['imagem']['size'] > 0)
            {
                //upload da imagem
                $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/unidades/",null,null,null);

                // Montando o link da img
                $imagem = base_url() . 'arquivos/assets/img/unidades/' . $imagem;

                $dadosUnidade["imagem"] = $imagem;
            }

            //Inserindo o serviço
            if($this->unidade->update($dadosUnidade, ["id_unidades" => $id])){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Unidade atualizada!"
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

    public function ajaxCadastrarUnidade()
    {

        //Verifica se o usuario está logado
        $this->VerificaLogin();

        $this->load->helper('arquivos');

        if(isset($_POST)){

            $imagem = null;

            // Verificando se inseriu imagem
            if(isset($_FILES['imagem']))
            {

                //upload da imagem
                $imagem = $this->uploadFile($_FILES["imagem"], "./arquivos/assets/img/unidades/",null,null,null);

                // Montando o link da img
                $imagem = base_url() . 'arquivos/assets/img/unidades/' . $imagem;
            }

            $dadosUnidade = array(
                "nome" => $_POST['nome'],
                "endereco" => $_POST['endereco'],
                "cep" => $_POST['cep'],
                "estado" => $_POST['estado'],
                "cidade" => $_POST['cidade'],
                "numero" => $_POST['numero'],
                "telefone" => $_POST['telefone'],
                "referencia" => $_POST['referencia'],
                "imagem" => $imagem,
                "email_contato" => $_POST['email_contato'],
                "email_trabalhe_conosco" => $_POST['email_trabalhe_conosco']
            );

            //Inserindo a unidade
            if($this->unidade->insert($dadosUnidade)){
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Unidade cadastrada!"
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
