<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe responsavel por conter todos os métodos
 * de comunicação Ajax.
 */
class Ajax extends CI_Controller
{

  // Método construtor da classe
	function __construct()
	{
		parent::__construct();
        $this->load->model("Usuario_model","usuario");
        $this->load->model("Ebook_model","ebook");
        $this->load->model("Consulta_model","consulta");
        $this->load->model("Contato_model","contato");
        $this->load->model("Unidade_model","unidade");
        $this->load->model("Lead_model","lead");
	}





    public function cadastrarWhats()
    {
        // Váriaveis
        $dados   = null;
        $salva   = null;

        if (!empty($_POST))
        {

            // Váriaveis POST
            $nome = $_POST["nome"];
            $contato = $_POST["contato"];

            $salva = array(
                "nome" => $nome,
                "contato" => $contato
            );

            if ($this->contato->insert($salva))
            {

                // Carrega a library email
                $this->load->library('email');

                //Inicia o processo de configuração para o envio do email
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'ssl://smtp.gmail.com';
                $config['smtp_user'] = 'mail@desigual.com.br';
                $config['smtp_pass'] = 'Desigu@al#!147';
                $config['smtp_port'] = '465';
                $config['newline'] = "\r\n";
                $config['crlf'] = "\r\n";

                // Inicializa a library Email, passando os parâmetros de configuração
                $this->email->initialize($config);

                // Define remetente e destinatário
                $this->email->from('mail@desigual.com.br', 'SOSDR'); // Remetente
                $this->email->to("contato@sosdr.com"); // Destinatário

                // Define o assunto do email
                $this->email->subject("Contato LP - SOSDR");

                $data = date("d/m/Y H:i:s");

                // Cria o texto a ser enviado por email
                $msg = "<h4>Novo conta da Landing page implante</h4></br></br>";
                $msg .= "<p><b>Nome:</b> {$nome}</p></br>";
                $msg .= "<p><b>Contato:</b> {$contato}</p></br>";
                $msg .= "<p><b>Data:</b> {$data}</p></br>";

                $this->email->message($msg);

                if($this->email->send())
                {
                    $dados = array(
                        "tipo" => true,
                        "mensagem" => "Cadastro realizado com sucesso!"
                    );
                }
                else
                {
                    $dados = array(
                        "tipo" => false,
                        "mensagem" => "Ops! Ocorreu algum erro ao enviar e-mail."
                    );
                }


            }
            else
            {
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Erro tente mais tarde"
                );
            }

        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Dados não enviado!"
            );
        }

        // Envia para a view
        echo json_encode($dados);

    }





	public function trabalheConosco()
	{
		// Váriaveis POST
		$nome     = $this->input->post("nome");
		$email    = $this->input->post("email");
		$celular  = $this->input->post("celular");
		$setor    = $this->input->post("setor");
		$mensagem = $this->input->post("mensagem");
        $id_unidade =  $this->input->post("unidade");

        // Busca a unidade
        $unidade = $this->unidade->get(["id_unidades" => $id_unidade]);

		// Váriaveis
		$dados   = null;
		$envia   = null;
		$msg     = null;
		$arquivo = null;
		$caminho = "./arquivos/curriculo/";
		$emailRecebe = $unidade[0]->email_trabalhe_conosco;

		// Verifica se o usuário fez o upload de algum arquivo
		if($_FILES["curriculo"] != null)
		{
			// Faz o upload do curriculo
			$arquivo = $this->_upload_arquivo("curriculo", $caminho, "pdf|doc|docx");

			// Verifica se o upload deu certo
			if($arquivo != null && $arquivo != 0 && $arquivo != false)
			{
				// Carrega a library email
				$this->load->library('email');

				// Link completo do curriculo
				$arquivo = base_url() . "arquivos/curriculo/" . $arquivo;

				//Inicia o processo de configuração para o envio do email
				$config['charset'] = 'utf-8';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.gmail.com';
				$config['smtp_user'] = 'mail@desigual.com.br';
				$config['smtp_pass'] = 'Desigu@al#!147';
				$config['smtp_port'] = '465';
				$config['newline'] = "\r\n";
				$config['crlf'] = "\r\n";

				// Inicializa a library Email, passando os parâmetros de configuração
				$this->email->initialize($config);

				// Define remetente e destinatário
				$this->email->from('mail@desigual.com.br', 'SOSDr'); // Remetente
				$this->email->to($emailRecebe); // Destinatário

				// Define o assunto do email
				$this->email->subject("Trabalhe Conosco - SOSDr");

				// Cria o texto a ser enviado por email
				$msg = "<h4>Quero trabalhar na SOSDr</h4></br></br>";
				$msg .= "<p><b>Nome:</b> {$nome}</p></br>";
				$msg .= "<p><b>E-mail:</b> {$email}</p></br>";
				$msg .= "<p><b>Celular:</b> {$celular}</p></br>";
				$msg .= "<p><b>Setor:</b> {$setor}</p></br>";
				$msg .= "<p><b>Mensagem:</b> {$mensagem}</p></br>";
				$msg .= "</br> <a href='{$arquivo}'>Download do Currículo</a>";

				$this->email->message($msg);

				if($this->email->send())
				{
					$dados = array(
						"tipo" => true,
						"mensagem" => "Seu currículo foi enviado. Em breve entraremos em contato."
					);
				}
				else
				{
					$dados = array(
						"tipo" => false,
						"mensagem" => "Ops! Ocorreu algum erro ao enviar e-mail."
					);
				}
			}
			else
			{
				$dados = array(
					"tipo" => false,
					"mensagem" => "Ops! Você deve enviar o seu currículo em PDF, DOC ou DOCX."
				);
			}
		}
		else
		{
			$dados = array(
				"tipo" => false,
				"mensagem" => "Ops! Você deve enviar o seu currículo."
			);
		}

		// Envia para a view
		echo json_encode($dados);
	}




	public function contato()
	{
		// Váriaveis POST
		$nome       = $this->input->post("nome");
		$email      = $this->input->post("email");
		$celular    = $this->input->post("celular");
		$setor      = $this->input->post("setor");
		$mensagem   = $this->input->post("mensagem");
		$id_unidade =  $this->input->post("unidade");

		// Busca a unidade
        $unidade = $this->unidade->get(["id_unidades" => $id_unidade]);

		// Váriaveis
		$dados   = null;
		$envia   = null;
		$msg     = null;
		$emailRecebe = $unidade[0]->email_contato;

//		if($setor == "Franquias")
//		{
//			$emailRecebe = "expansao@sosdr.com";
//		}
//
//		if($setor == "Duvidas"){
//            $emailRecebe2 = "atendimento@sosdr.com";
//        }

		// Carrega a library email
		$this->load->library('email');

		//Inicia o processo de configuração para o envio do email
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'mail@desigual.com.br';
		$config['smtp_pass'] = 'Desigu@al#!147';
		$config['smtp_port'] = '465';
		$config['newline'] = "\r\n";
		$config['crlf'] = "\r\n";

		// Inicializa a library Email, passando os parâmetros de configuração
		$this->email->initialize($config);

		// Define remetente e destinatário
		$this->email->from('mail@desigual.com.br', 'SOSDr'); // Remetente

        $this->email->to($emailRecebe); // Destinatário

//        if(isset($emailRecebe2)){
//
//            $this->email->to([$emailRecebe, $emailRecebe2]); // 2 Destinatário
//        }else{
//            $this->email->to($emailRecebe); // Destinatário
//        }

		// Define o assunto do email
		$this->email->subject("Contato - SOSDr");

		// Cria o texto a ser enviado por email
		$msg = "<h4>Contato - SOSDr</h4></br></br>";
		$msg .= "<p><b>Nome:</b> {$nome}</p></br>";
		$msg .= "<p><b>E-mail:</b> {$email}</p></br>";
		$msg .= "<p><b>Celular:</b> {$celular}</p></br>";
		$msg .= "<p><b>Canal:</b> {$setor}</p></br>";
		$msg .= "<p><b>Mensagem:</b> {$mensagem}</p></br>";

		$this->email->message($msg);

		if($this->email->send())
		{
			$dados = array(
				"tipo" => true,
				"mensagem" => "Sua mensagem foi enviada. Em breve entraremos em contato."
			);
		}
		else
		{
			$dados = array(
				"tipo" => false,
				"mensagem" => "Ops! Ocorreu algum erro ao enviar e-mail."
			);
		}

		// Envia para a view
		echo json_encode($dados);
	}

	public function contatoLP()
	{
        // Váriaveis
        $dados = null;
        $envia = null;
        $curl = null;
        $token = "16db1517-189a-4874-b5bb-58e1d627abc8";


        // Verifica se informou a unidade
        if (!empty($_POST['id_unidade']))
        {

            // inicia a conexão
            $curl = curl_init();

            // Dados para enviar para API
            $enviaAPI = [
                "name" => $_POST['nome'],
                "contact" => [
                    "mobile" => $_POST['telefone'],
                    "email" => (!empty($_POST['email']) ? $_POST['email'] : "emailnaoinformado@gmail.com")
                ]
            ];

            // Array de configuração
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.agendor.com.br/v3/people",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($enviaAPI),
                CURLOPT_HTTPHEADER => array(
                    "authorization: Token ".$token,
                    "cache-control: no-cache",
                    "content-type: application/json"
                ),
            ));

            // Executa e pega o retonro
            $retorno = curl_exec($curl);
            $err = curl_error($curl);

            // Fecha a conexão
            curl_close($curl);

            // Valida para ver se teve erro
            if($err)
            {
                // Mostra a mensagem de erro
                echo "cURL Error #:" . $err;
            }
            else
            {

                // Decodifica o JSON
                $retorno = json_decode($retorno);

                // inicia a segunda conexão
                $curl2 = curl_init();

                // Dados para enviar para API
                $enviaAPI2 = [
                    "title" => $_POST['lp'],
                ];

                curl_setopt_array($curl2, array(
                    CURLOPT_URL => "https://api.agendor.com.br/v3/people/".$retorno->data->id."/deals",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode($enviaAPI2),
                    CURLOPT_HTTPHEADER => array(
                        "authorization: Token ".$token,
                        "cache-control: no-cache",
                        "content-type: application/json"
                    ),
                ));

                $retorno2 = curl_exec($curl2);
                $err2 = curl_error($curl2);

                curl_close($curl2);

                if ($err2)
                {
                    echo "cURL Error #:" . $err2;
                }
                else
                {
                    // Váriaveis POST
                    $salva = [
                        "id_unidade" => $_POST['id_unidade'],
                        "id_api" => $retorno->data->id,
                        "nome" => $_POST['nome'],
                        "lp" => $_POST['lp'],
                        "email" => (!empty($_POST['email']) ? $_POST['email'] : "Email não informado"),
                        "telefone" => $_POST['telefone']
                    ];

                    // Cadastre o role no bdd
                    if($this->lead->insert($salva) != false)
                    {
                        $dados = array(
                            "tipo" => true,
                            "mensagem" => "Em breve entraremos em contato."
                        );
                    }
                    else
                    {
                        $dados = array(
                            "tipo" => false,
                            "mensagem" => "Ops! Ocorreu algum erro ao enviar os dados."
                        );
                    }

                }

            }


        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Selecione uma unidade."
            );
        }



		// Envia para a view
		echo json_encode($dados);
	}

	public function leadDelete()
	{
        // Váriaveis
        $dados   = null;
        $envia   = null;


        // Cadastre o role
        if($this->lead->delete(["id_lead" => $_POST['id']]) != false)
        {
            $dados = array(
                "tipo" => true,
                "mensagem" => "Sucesso"
            );
        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Ops! Ocorreu algum ao excluir os dados."
            );
        }

		// Envia para a view
		echo json_encode($dados);
	}




	public function login()
	{
		// Recebe os dados
		$nome  = $this->input->post("nome");
		$token = $this->input->post("token");
		$telefone = $this->input->post("telefone");

		$aux = str_split($telefone);
		$telefone = "(" . $aux[0] . $aux[1] . ") " . $aux[2] . $aux[3] . $aux[4] . $aux[5] . $aux[6] ."-". $aux[7] . $aux[8] . $aux[9] . $aux[10];



		$salva = array(
			"nome" => explode(" ",$nome)[0],
			"token" => $token,
			"telefone" => $telefone,
			"logou" => true
		);

		// Salva a session
		$this->session->set_userdata($salva);

		echo json_encode(array("tipo" => true));
	}




	public function newsLetter()
	{
		// Metodos
		$this->load->model("Newsletter_model","News");

		// Variaveis
		$dados = null;
		$salva = null;

		// Variaveis POST
		$nome  = $this->input->post("nome");
		$email = $this->input->post("email");

		$salva = array(
			"nome" => $nome,
			"email" => $email
		);

		// Verifica se já possui o email cadastrado
		if($this->News->num_rows(array("email" => $email)) == 0)
		{
			// Cadastre o role
			if($this->News->insert($salva) != false)
			{
				$dados = array(
					"tipo" => true,
					"mensagem" => "Cadastro realizado com sucesso!"
				);
			}
			else
			{
				$dados = array(
					"tipo" => false,
					"mensagem" => "Ops! Ocorreu algum erro, tente novamente."
				);
			}
		}
		else
		{
			$dados = array(
				"tipo" => false,
				"mensagem" => "Ops! Este e-mail já esta cadastrado."
			);
		}


		echo json_encode($dados);
	}



	public function verificaCpf()
	{
		$cpf = $this->input->post("cpf");

		$ret = $this->_validaCPF($cpf);

		if($ret == true)
		{
			$dados = array("tipo" => true);
		}
		else
		{
			$dados = array("tipo" => false);
		}

		echo json_encode($dados);
	}




    public function cadastroLP()
    {
        // Váriaveis POST
        $nome      = $this->input->post("nome");
        $cargo     = $this->input->post("cargo");
        $celular   = $this->input->post("celular");
        $empresa   = $this->input->post("empresa");
        $numFun    = $this->input->post("funcionarios");


        // Váriaveis
        $dados   = null;
        $envia   = null;
        $msg     = null;
        $emailRecebe = "igor@desigual.com.br,gustavo@sosdr.com,caio@sosdr.com,marilia@sosdr.com,gabriela.grosse@sosdr.com";


        // Carrega a library email
        $this->load->library('email');


        //Inicia o processo de configuração para o envio do email
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = 'mail@desigual.com.br';
        $config['smtp_pass'] = 'Desigu@al#!147';
        $config['smtp_port'] = '465';
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";


        // Inicializa a library Email, passando os parâmetros de configuração
        $this->email->initialize($config);


        // Define remetente e destinatário
        $this->email->from('mail@desigual.com.br', 'SOSDr'); // Remetente
        $this->email->to($emailRecebe); // Destinatário


        // Define o assunto do email
        $this->email->subject("Contato - SOSDr");


        // Cria o texto a ser enviado por email
        $msg = "<h4>Contato - Medicina do Trabalho SOS Dr</h4></br></br>";
        $msg .= "<p><b>Nome:</b> {$nome}</p></br>";
        $msg .= "<p><b>Cargo:</b> {$cargo}</p></br>";
        $msg .= "<p><b>Celular:</b> {$celular}</p></br>";
        $msg .= "<p><b>Empresa:</b> {$empresa}</p></br>";
        $msg .= "<p><b>Número de funcionários:</b> {$numFun}</p></br>";


        $this->email->message($msg);


        if($this->email->send())
        {
            $dados = array(
                "tipo" => true,
                "mensagem" => "Sua mensagem foi enviada. Em breve entraremos em contato."
            );
        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Ops! Ocorreu algum erro ao enviar e-mail."
            );
        }

        // Envia para a view
        echo json_encode($dados);
	}



	public function contatoEbook(){


        if(isset($_POST)){

            //Verificando se já existe esse celular cadastrado
            $busca = $this->ebook->num_rows(['celular' => $this->input->post("celular")]);

            if ($busca <= 0)
            {
                // Váriaveis POST e montando a array insert
                $dadosEbook = array(
                    "nome" => $this->input->post("nome"),
                    "celular" => $this->input->post("celular"),
                    "nomeAmigo" => $this->input->post("nomeAmigo"),
                    "celularAmigo" => $this->input->post("celularAmigo"),
                );

                //Inserindo no banco
                if($this->ebook->insert($dadosEbook)){

                    //Buscando o usuário para gerar o códio atráves do ID
                    $busca = $this->ebook->get(['celular' => $this->input->post("celular")]);
                    $codigo = "SOS-F".$busca[0]->id_ebook."X";

                    //Faz o update do código
                    $this->ebook->update(["codigo" => $codigo], ["id_ebook" => $busca[0]->id_ebook]);

                    //Busca todos os dados do usuario
                    $busca = $this->ebook->get(['celular' => $this->input->post("celular")]);

                    // Array de dados
                    $dados = array(
                        "tipo" => true,
                        "mensagem" => "Informe o seu código ".$busca[0]->codigo." no site e faça o download",
                        "objeto" => $busca[0]
                    );

                }else{

                    // Array de dados
                    $dados = array(
                        "tipo" => false,
                        "mensagem" => "Ocorreu um erro"
                    );
                }

            }
            else
            {
                //Busca o usuario
                $busca = $this->ebook->get(['celular' => $this->input->post("celular")]);

                // Array de dados
                $dados = array(
                    "tipo" => "tem-cadastro",
                    "mensagem" => "Informe o seu código ".$busca[0]->codigo." no site e faça o download",
                    "objeto" => $busca[0]
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



    public function validarCodigoEbook(){

        //Buscando o usuário
        $busca = $this->ebook->num_rows(['codigo' => $_POST['codigo']]);

        if($busca >= 1 )
        {
            //codigo recebido do post
            $codigo = $_POST['codigo'];

            //Pegando o id do bendito
            $id = explode('F',$codigo);
            $id = explode('X',$id[1]);
            $id = $id[0];

            //Buscando o usuário
            $busca = $this->ebook->get(['id_ebook' => $id]);

            //Validando o código
            if($codigo == $busca[0]->codigo)
            {
                // Array de dados
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "código valido",
                );
            }
            else
            {
                // Array de dados
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Código inválido",
                );
            }
        }
        else
        {
            // Array de dados
            $dados = array(
                "tipo" => false,
                "mensagem" => "Código não encontrado",
            );
        }


        echo json_encode($dados);

    }




    public function ganheConsulta1(){

	    //Pegando os dados do post
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];

        //Verificando se já existe cadastro
        $busca = $this->consulta->num_rows(['celular' => $celular]);

        if($busca <= 0)
        {
            //Montando array de insert
            $dadosConsulta = [
                "nome" => $nome,
                "celular" => $celular,
            ];

            //Inserindo no banco
            if($this->consulta->insert($dadosConsulta))
            {

                //Busca todos os dados do usuario
                $busca = $this->consulta->get(['celular' => $celular]);

                // Array de dados
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Sucesso",
                    "objeto" => $busca[0]
                );

            }
            else
            {
                // Array de dados
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Erro ao salvar contato",
                );
            }
        }
        else
        {

            //Verificando se possui um cadastro inativo
            $busca = $this->consulta->get(['celular' => $celular]);

            //Siginificaa que o usuario possui um cadastro mais ainda não passou para o passo 2
            //para informar os amigos e verificar o celular via SMS
            if ($busca[0]->status == 0)
            {
                // Array de dados
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "Sucesso",
                    "objeto" => $busca[0]
                );
            }
            else
            {
                // Array de dados
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Você já possui cadastro, aguarde em breve nosso o contato",
                );
            }

        }

        echo json_encode($dados);

    }





    public function ganheConsulta2($param = null){

	    //Pegando o id por parametro
	    $id = $param;

	    //Pegando os dados do post
        $nome1 = $_POST['nomeAmigo1'];
        $celular1 = $_POST['celularAmigo1'];
        $nome2 = $_POST['nomeAmigo2'];
        $celular2 = $_POST['celularAmigo2'];
        $nome3 = $_POST['nomeAmigo3'];
        $celular3 = $_POST['celularAmigo2'];

        // Gerando o código
        $codigo = "SOS-P".$id."W";

        //Montando array de insert
        $dadosConsulta = [
            "nome1" => $nome1,
            "nome2" => $nome2,
            "nome3" => $nome3,
            "celular1" => $celular1,
            "celular2" => $celular2,
            "celular3" => $celular3,
            "codigo" => $codigo
        ];

        // Fazendo update
        if($this->consulta->update($dadosConsulta,['id_consulta' => $id]))
        {
            //Busca todos os dados do usuario
            $busca = $this->consulta->get(['id_consulta' => $id]);

            // Array de dados
            $dados = array(
                "tipo" => true,
                "mensagem" => "Informe o seu código ".$codigo." para validar o cadastro",
                "objeto" => $busca[0]
            );

        }
        else
        {
            // Array de dados
            $dados = array(
                "tipo" => false,
                "mensagem" => "Erro ao enviar código, tente mais tarde",
            );
        }

        echo json_encode($dados);

    }




    public function validarCodigoConsulta(){

        //Buscando o usuário
        $busca = $this->consulta->num_rows(['codigo' => $_POST['codigo']]);

        if($busca >= 1 )
        {
            //codigo recebido do post
            $codigo = $_POST['codigo'];

            //Pegando o id do bendito
            $id = explode('P',$codigo);
            $id = explode('W',$id[1]);
            $id = $id[0];

            //Buscando o usuário
            $busca = $this->consulta->get(['id_consulta' => $id]);

            //Validando o código
            if($codigo == $busca[0]->codigo)
            {
                // Fazendo o update no status
                $this->consulta->update(['status' => 1],['id_consulta' => $busca[0]->id_consulta]);

                // Array de dados
                $dados = array(
                    "tipo" => true,
                    "mensagem" => "código valido",
                );
            }
            else
            {
                // Array de dados
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Código inválido",
                );
            }
        }
        else
        {
            // Array de dados
            $dados = array(
                "tipo" => false,
                "mensagem" => "Código não encontrado",
            );
        }


        echo json_encode($dados);

    }




	/**
	 * -------------------------------------------------
	 * 							Métodos Estáticos
	 * --------------------------------------------------
	 */

	 /**
		* Este método é utilizado para fazer upload dos arquvos
		* @param  [type] $arquivo  [description]
		* @param  [type] $caminho  [description]
		* @param  [type] $extensao [description]
		* @return [string] $ret [Retorna o nome do arquivo ou em casa de erro FALSE]
		*/

	function _upload_arquivo($arquivo = null, $caminho = null, $extensao = null)
	 {
		 // Variaveis
		 $ret = false; #Armazena o retorno da função
		 $data = null; #Armazena o nome do arquivo que sera retornado

		 $config['upload_path']          = $caminho;
		 $config['allowed_types']        = '*';
		 $config['file_name']            = date("Y-m-d-is");
		 $config['max_size']             = 99999999999999999;

		 $this->load->library('upload', $config);

		 if($this->upload->do_upload($arquivo))
		 {
			 $data = $this->upload->data();
			 $ret = $data['file_name'];
		 }

		 // Gambis basica
		 if($ret == 0)
		 {
			 $ret = null;
		 }

		 return $ret;
	 } // Fim método -> _upload_arquivo




	function _validaCPF($cpf = null)
	 {
	     return true;
     }


    public function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@#$%¨&*()_+="; // $si contem os símbolos
        $senha = "";

        if ($maiusculas){
            // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($ma);
        }

        if ($minusculas){
            // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($mi);
        }

        if ($numeros){
            // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($nu);
        }

        if ($simbolos){
            // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($si);
        }

        // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
        return substr(str_shuffle($senha),0,$tamanho);
    }






    public function ajaxCadastrarUsuario()
    {

        // Variaveis
        $dados = null;
        $salva = null;

        // Variaveis POST
        $nome  = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $c_senha = $this->input->post("c_senha");

        if ($senha == $c_senha)
        {

            $salva = array(
                "nome" => $nome,
                "email" => $email,
                "senha" => md5($senha),
            );


            // Verifica se já possui o email cadastrado
            if($this->usuario->num_rows(array("email" => $email)) == 0)
            {
                // Cadastre o role
                if($this->usuario->insert($salva) != false)
                {
                    $dados = array(
                        "tipo" => true,
                        "mensagem" => "Cadastro realizado com sucesso!"
                    );
                }
                else
                {
                    $dados = array(
                        "tipo" => false,
                        "mensagem" => "Ops! Ocorreu algum erro, tente novamente."
                    );
                }
            }
            else
            {
                $dados = array(
                    "tipo" => false,
                    "mensagem" => "Ops! Este e-mail já esta cadastrado."
                );
            }


        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Ops! as senha precisam ser idênticas."
            );
        }


        echo json_encode($dados);
    }

    public function ajaxEditarUsuario()
    {
        // Variaveis
        $dados = null;
        $salva = null;

        // Variaveis POST
        $id  = $this->input->post("id");
        $nome  = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");

        $salva = array(
            "nome" => $nome,
            "email" => $email
        );

        if (!empty($senha))
        {
            $salva["senha"] = md5($senha);
        }


        // Verifica se já possui o email cadastrado
        if($this->usuario->update($salva,["Id" => $id]))
        {
            $dados = array(
                "tipo" => true,
                "mensagem" => "Alterado realizado com sucesso!"
            );
        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Ops! Erro ao alterar usuário."
            );
        }


        echo json_encode($dados);
    }

    public function ajaxExcluirUsuario($id)
    {
        // Váriaveis
        $dados   = null;
        $envia   = null;


        // Deleta o role
        if($this->usuario->delete(["Id" => $id]) != false)
        {
            $dados = array(
                "tipo" => true,
                "mensagem" => "Sucesso"
            );
        }
        else
        {
            $dados = array(
                "tipo" => false,
                "mensagem" => "Ops! Ocorreu algum ao excluir os dados."
            );
        }

        // Envia para a view
        echo json_encode($dados);
    }





}//Fim da Classe
