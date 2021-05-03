<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

    // Método construtor da classe
    function __construct()
    {
        parent::__construct();
        $this->load->model("Servico_model","servico");
        $this->load->model("Ebook_model","ebook");
        $this->load->model("Consulta_model","consulta");
        $this->load->model("Blog_model","blog");
        $this->load->model("Contato_model","contato");
        $this->load->model("Unidade_model","unidade");
    }

    private function cassinoSos()
    {
        date_default_timezone_set('America/Sao_Paulo');

        $dataInicio = new \DateTime('2019/08/16 09:30:00');
        $dataAtual = new \DateTime(date("Y/m/d h:i:s"));


        $data1  = $dataInicio->format('Y-m-d H:i:s');
        $data2  = $dataAtual->format('Y-m-d H:i:s');

        $diff = $dataInicio->diff($dataAtual);


        $minutos = (($diff->h + ($diff->days * 24)) * 60) + $diff->i;

        return $minutos;
    }

    public  function enviaContatoHuggy(){

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $celular = "55" . preg_replace("/[^0-9]/", "", $_POST['phone']);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.huggy.io/v2/contacts",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n  \"name\": \"". $nome ."\",\r\n  \"email\": \"". $email ."\",\r\n  \"phone\": ". $celular ."\r\n} ",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer c46f34b7cb0d17b2450397d4afcf63d3"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) { return false; } else { return true; }
    }

    public function index()
    {

        $buscaExames = $busca = $this->servico->get(['categoria' => 'exames', 'status' => 1],'Id ASC');
        $buscaConsultas = $busca = $this->servico->get(['categoria' => 'consultas', 'status' => 1],'Id ASC');
        $buscaOdontologia = $busca = $this->servico->get(['categoria' => 'odontologia', 'status' => 1],'Id ASC');


        $sql_blog = "SELECT * FROM painel_blog WHERE status = 1 ORDER BY data DESC, id_blog DESC LIMIT 0,4";
        $buscaBlog = $busca = $this->blog->query($sql_blog);


        $dados = array(
            "seo" => array(
                "titulo" => "SOS Dr | Centro Médico e Odontológico",
                "descricao" => "A nossa meta é que os serviços de saúde de qualidade sejam acessíveis a todos, para isso focamos em ser a primeira rede clínica especializada em prevenção no Brasil. 
                A conscientização é a nossa principal bandeira e através dos nossos modernos Centros de Diagnóstico e Acompanhamento buscamos desafogar as UTI's, 
                diminuindo assim os custos, tanto para o prestador quanto para o paciente, e consequentemente tornamos a saúde um serviço mais democrático.",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor, sosdr, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOS Dr | Centro Médico e Odontológico",
                "descricao" => "Cuide da sua saúde com muita qualidade e com um preço bem acessível. A SOS Dr oferece
					atendimentos médicos em diversas especialidades, serviços odontológicos e também
					exames laboratoriais e de imagem. Agende a sua consulta agora mesmo.",
            ),
            "url" => base_url(),
            "pag" => "",
            "minutos" => $this->cassinoSos(),
            "exames" => $buscaExames,
            "consultas" => $buscaConsultas,
            "odontologia" => $buscaOdontologia,
            "blog" => $buscaBlog
        );

        $this->load->view("default/site/index",$dados);
    }

    public function quemSomos()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Sobre Nós | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "quem-somos",
            "pag" => "quem-somos"
        );

        $this->load->view("default/site/quem-somos",$dados);
    }

    public function novaQuemSomos()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Sobre Nós | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "quem-somos",
            "pag" => "quem-somos"
        );

        $this->load->view("default/site/nova-quem-somos",$dados);
    }

    public function unidades()
    {

        $unidades = $this->unidade->get();

        $dados = array(
            "seo" => array(
                "titulo" => "Unidades | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "unidades",
            "pag" => "unidades",
            "unidades" => $unidades
        );

        $this->load->view("default/site/unidades",$dados);
    }

    public function faq()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Quer Ajuda | SOS Dr",
                "descricao" => "Dúvidas sobre SOS dr, perguntas sobre serviços médicos e odontológicos.",
                "palavras" => "perguntas, dúvidas, saúde, pagamentos, especialidades, atendimentos, médico, dentista,
					exames, doutor, doctor, dr, sos, sos dr, sos doutor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "Tire suas dúvidas na SOS Dr",
                "descricao" => "O nosso maior objetivo é o seu bem-estar. Estamos sempre à disposição para atender às
					suas necessidades e para responder às suas dúvidas."
            ),
            "url" => base_url() . "quer-ajuda",
            "pag" => "quer-ajuda"
        );

        $this->load->view("default/site/quer-ajuda",$dados);
    }

    public function trabalheConosco()
    {

        // Busca as unidade
        $unidades = $this->unidade->get();

        $dados = array(
            "seo" => array(
                "titulo" => "Trabalhe Conosco | SOS Dr",
                "descricao" => "Faça parte da equipe SOS Dr. Aqui você terá a oportunidade de melhorar a vida das
						pessoas e ainda conta com uma série de benefícios.",
                "palavras" => "médico, dentista, exames, Marília, vaga, emprego, trabalhar, profissional, oportunidade,
					crescimento, cadastro"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "Faça parte da equipe SOS Dr",
                "descricao" => "Faça parte da equipe SOS Dr. Aqui você terá a oportunidade de melhorar a vida das
						pessoas e ainda conta com uma série de benefícios."
            ),
            "unidades" => $unidades,
            "url" => base_url() . "trabalhe-conosco",
            "pag" => "trabalhe-conosco"
        );

        $this->load->view("default/site/trabalhe-conosco",$dados);
    }

    public function contato()
    {

        // Busca as unidade
        $unidades = $this->unidade->get();

        $dados = array(
            "seo" => array(
                "titulo" => "Fale conosco | SOS Dr",
                "descricao" => "Tem alguma dúvida ou sugestão? Entre em contato com a gente, retornaremos em breve. SOS Dr, centro médico e odontológico",
                "palavras" => "médico, dentista, exames, Marília, sugestões, sugestão, dúvida, contato, cadastro, SAC,
					atendimento, conversa, sos dr, sos, dr, doutor, doctor, dotor, marilia, médico em marilia"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "Fale Conosco - SOS Dr",
                "descricao" => "Tem alguma dúvida ou sugestão? Entre em contato com a gente, retornaremos em breve."
            ),
            "unidades" => $unidades,
            "url" => base_url() . "contato",
            "pag" => "contato"
        );

        $this->load->view("default/site/contato",$dados);
    }

    public function sucesso()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Agendamento Realizado | SOS Dr",
                "descricao" => "Tem alguma dúvida ou sugestão? Entre em contato com a gente, retornaremos em breve. SOS Dr, centro médico e odontológico",
                "palavras" => "médico, dentista, exames, Marília, sugestões, sugestão, dúvida, contato, cadastro, SAC,
					atendimento, conversa, sos dr, sos, dr, doutor, doctor, dotor, marilia, médico em marilia"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "",
                "descricao" => ""
            ),
            "url" => base_url() . "agendamento-realizado",
            "pag" => "sucesso"
        );

        $this->load->view("default/site/sucesso",$dados);
    }

    public function sair()
    {
        // Destroi a sessão
        $this->session->sess_destroy();

        // Manda para a Home
        redirect(base_url(),"location");
    }

    public function teste($id = null, $token = null)
    {
        $dados = array(
            "id" => $id,
            "token" => $token
        );

        $this->load->view("default/site/teste",$dados);
    }

    public function blog ()
    {

        $destaques = null;
        $blog = null;
        $quantidade = 0;
        $dados = null;
        $categorias = null;
        $sql_filtro = null;

        //Buscando todas as categorias das noticias
        $sql_categoria = "SELECT categoria FROM painel_blog group by categoria";
        $categorias = $this->blog->query($sql_categoria);


        // Verificando se inseriu o filtro
        if(isset($_GET['categoria']))
        {
            $filtro = $_GET['categoria'];
            $sql_filtro = "SELECT * FROM painel_blog WHERE status = 1 AND categoria = '".$filtro."' ORDER BY destaque DESC, id_blog DESC";
        }


        // Buscando quantas noticias tem para trocar o layout dps
        $quantidade = $this->blog->num_rows(['status' => 1]);

        if($quantidade < 4)
        {
            $sql_blog = "SELECT * FROM painel_blog WHERE status = 1 ORDER BY destaque DESC, id_blog DESC";
            $sql_destaque = null;

        }
        else if($quantidade >= 4)
        {
            $sql_blog = "SELECT * FROM painel_blog WHERE status = 1 ORDER BY destaque DESC, id_blog DESC LIMIT 2,9999";
            $sql_destaque = "SELECT * FROM painel_blog WHERE status = 1 ORDER BY destaque DESC, id_blog DESC LIMIT 0,2";
        }
        else if($quantidade <= 0)
        {
            $dados = array(
                "mensagem" => "Sem publicações",
            );

            $this->load->view("default/site/blog",$dados);
            exit;
        }

        $blog = $this->blog->query($sql_blog);

        if ($sql_destaque != null)
        {
            $destaques = $this->blog->query($sql_destaque);
        }
        else
        {
            $destaques = null;
        }

        // Executando o filtro
        if($sql_filtro != null)
        {
            $filtro = $this->blog->query($sql_filtro);
        }
        else
        {
            $filtro = null;
        }

        $dados = array(
            "blog" => $blog,
            "destaques" => $destaques,
            "categorias" => $categorias,
            "filtro" => $filtro,
            "seo" => array(
                "titulo" => "Notícias | SOS Dr",
                "descricao" => "Dúvidas sobre SOS dr, perguntas sobre serviços médicos e odontológicos.",
                "palavras" => "perguntas, dúvidas, saúde, pagamentos, especialidades, atendimentos, médico, dentista,
					exames, doutor, doctor, dr, sos, sos dr, sos doutor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "Tire suas dúvidas na SOS Dr",
                "descricao" => "O nosso maior objetivo é o seu bem-estar. Estamos sempre à disposição para atender às
					suas necessidades e para responder às suas dúvidas."
            ),
            "url" => base_url() . "blog",
            "pag" => "blog"
        );

        $this->load->view("default/site/blog", $dados);
    }

    public function blogDetalhes($url = null)
    {

        // Variaveis
        $post = null;
        $recentes = null;
        $dados = null;

        // Buscando o post selecionado
        $post = $this->blog->get(['url' => $url]);

        // Buscando os post recentes
        $recentes = $this->blog->query("SELECT * FROM painel_blog WHERE status = 1 ORDER BY data DESC, id_blog DESC LIMIT 0,3");

        $dados = array(
            "post" => $post,
            "recentes" => $recentes,
            "seo" => array(
                "titulo" => $post[0]->titulo." | SOS Dr",
                "descricao" => $post[0]->resumo,
                "palavras" => $post[0]->tags
            ),
            "smo" => array(
                "url" => base_url() . "blog/".$post[0]->url,
                "imagem" => base_url()."arquivos/assets/img/blog/".$post[0]->imagem,
                "titulo" => $post[0]->titulo." | SOS Dr",
                "descricao" => $post[0]->resumo."..."
            ),
            "url" => base_url() . "blog",
            "pag" => "blog"
        );

        $this->load->view("default/site/blog_detalhes", $dados);

    }



    /**
     *  ---------------------------------------------------
     *                    Landing Pages
     *  ---------------------------------------------------
     */

    public function lp_exame()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Exames | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-exames",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-exames"
        );

        $this->load->view("default/site/lps/lp-exame",$dados);

    } // END >> Fun::lp_exame()

    public function lp_medTrabalho()
    {
        $dados = array(
            "seo" => array(
                "titulo" => "Segurança e Medicina do Trabalho | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "medicinadotrabalho",
            "minutos" => $this->cassinoSos(),
            "pag" => "medicinadotrabalho"
        );

        $this->load->view("default/site/lps/medicinadotrabalho",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_cardiologia()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Cardiologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
                especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
                médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-cardiologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-cardiologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-cardiologia", $dados);


    } // END >> Fun::lp_medTrabalho()

    public function lp_cardiologia_mobile()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Cardiologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
                especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
                médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-cardiologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-cardiologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-cardiologia-mobile", $dados);


    } // END >> Fun::lp_medTrabalho()

    public function lp_ginecologia_obstetricia()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Ginecologia e Obstetrícia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-ginecologia-obstetricia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-ginecologia-obstetricia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-ginecologia-obstetricia",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_institucional()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Se vcocê chegou até aqui é porque algo em sua sáude está te preocupando | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-institucional",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-institucional",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-institucional",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_ginecologia_obstetricia_mobile()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Ginecologia e Obstetrícia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-ginecologia-obstetricia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-ginecologia-obstetricia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-ginecologia-obstetricia-mobile",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_odontologia()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Odontologia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-odontologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-odontologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-odontologia",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_odontologia_mobile()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Odontologia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-odontologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-odontologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-odontologia-mobile",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_oftalmologia()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Oftalmologia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-oftalmologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-oftalmologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-oftalmologia",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_oftalmologia_mobile()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Oftalmologia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-oftalmologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp-oftalmologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-oftalmologia-mobile",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_clinico_geral()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Clínico Geral? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_clinico_geral",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_clinico_geral",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp_clinico_geral",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_clinico_geral_mobile()
    {

        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Clínico Geral? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_clinico_geral",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_clinico_geral",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp_clinico_geral_mobile",$dados);

    } // END >> Fun::lp_medTrabalho()

    public function lp_exames_laboratoriais()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Exames Laboratoriais | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_clinico_geral",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_exames_laboratoriais",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-exames-laboratoriais",$dados);

    } // END >> Fun::lp_exames_laboratoriais()

    public function lp_dermatologia()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Dermatologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_dermatologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_dermatologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-dermatologia",$dados);

    } // END >> Fun::lp_dermatologia()

    public function lp_ebook()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, cuidado, saúde, emagrecimento, corpo, gratuito, especialista, bem-estar, quero emagrecer, preciso emagrecer"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
            ),
            "url" => base_url() . "ebook",
            "pag" => "ebook",
        );

        $this->load->view("default/site/lps/lp-ebook",$dados);

    }

    public function lp_ebook_cadastro(){

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, cuidado, saúde, emagrecimento, corpo, gratuito, especialista, bem-estar, quero emagrecer, preciso emagrecer"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
            ),
            "url" => base_url() . "ebook",
            "pag" => "ebook",
        );

        $this->load->view("default/site/lps/lp-ebook-cadastro",$dados);
    }

    public function lp_ebook_2()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, cuidado, saúde, emagrecimento, corpo, gratuito, especialista, bem-estar, quero emagrecer, preciso emagrecer"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
            ),
            "url" => base_url() . "ebook2",
            "pag" => "ebook2",
        );

        $this->load->view("default/site/lps/lp-ebook-2",$dados);

    }

    public function lp_ebook_cadastro2(){

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, cuidado, saúde, emagrecimento, corpo, gratuito, especialista, bem-estar, quero emagrecer, preciso emagrecer"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Bons hábitos, qualidade de vida, emagrecimento, saúde e vida longa ao seu corpo? Receba este e-book gratuito e tenho o corpo que deseja com ajuda de especialistas.",
            ),
            "url" => base_url() . "ebook2/cadastro2",
            "pag" => "ebook2/cadastro2",
        );

        $this->load->view("default/site/lps/lp-ebook-cadastro2",$dados);
    }

    public function lp_ganhe_consulta()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta",
            "pag" => "ganhe-consulta",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta",$dados);

    }

    public function lp_ganhe_consulta_amigos()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta-amigos",
            "pag" => "ganhe-consulta-amigos",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta-amigos",$dados);

    }

    public function lp_ganhe_consulta_cadastro(){

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta",
            "pag" => "ganhe-consulta",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta-cadastro",$dados);
    }

    public function lp_ganhe_consulta2()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta2",
            "pag" => "ganhe-consulta2",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta2",$dados);

    }

    public function lp_ganhe_consulta_amigos2()
    {

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta-amigos2",
            "pag" => "ganhe-consulta-amigos2",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta-amigos2",$dados);

    }

    public function lp_ganhe_consulta_cadastro2(){

        // Variaveis
        $dados = null;

        $dados = array(
            "seo" => array(
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas, especialidades, laboratório, policlínica, consulta, procedimento, marília, cuidado, especializado, saúde, depende, você, qualidade, vida"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO",
                "descricao" => "Sua saúde só depende de você, agende uma consulta e tenha qualidade de vida e vida longa. Cuidado especializado, cuidadoso e de qualidade você só encontra na SOS DR",
            ),
            "url" => base_url() . "ganhe-consulta2",
            "pag" => "ganhe-consulta2",
        );

        $this->load->view("default/site/lps/lp-ganhe-consulta-cadastro2",$dados);
    }

    public function gerarExcel(){

        // Buscando todas as consultas
        $busca = $this->consulta->get();


        $dados = array(
            "consultas" => $busca
        );


        $this->load->view("default/site/relatorio_excel_consulta",$dados);


    }

    public function gerarExcelEbook(){

        // Buscando todas as consultas
        $busca = $this->ebook->get();


        $dados = array(
            "contatos" => $busca
        );


        $this->load->view("default/site/relatorio_excel_ebook",$dados);


    }

    public function gerarExcelContatoLP(){

        // Buscando todas as consultas
        $consultas = $this->contato->get();

        $dados = array(
            "consultas" => $consultas
        );


        $this->load->view("default/site/relatorio_excel_contatoLP",$dados);


    }

    // 9 LPS NOVAS

    public function lp_laboratorio()
    {
        // Variaveis
        $dados = null;
        $msg = null;
        $unidades = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $unidades = $this->unidade->get();

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Exames? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_laboratorio",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_laboratorio",
            "unidades" => $unidades,
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-laboratorio",$dados);

    } // END >> Fun::lp_laboratorio()

    public function leadSucesso()
    {
        $this->load->view("default/site/lps/leads");
    }

    public function lp_endocrinologista()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Endocrinologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_endocrinologista",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_endocrinologista",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-endocrinologista",$dados);

    } // END >> Fun::lp_endocrinologista()

    public function lp_ultrassom()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Ultrassom? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_ultrassom",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_ultrassom",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-ultrassom",$dados);

    } // END >> Fun::lp_ultrassom()

    public function lp_gastro()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Gastro? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_gastro",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_gastro",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-gastro",$dados);

    } // END >> Fun::lp_gastro()

    public function lp_ortopedia()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Ortopedia? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-ortopedia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_ortopedia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-ortopedia",$dados);

    } // END >> Fun::lp_ortopedia()

    public function lp_urologia()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Urologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-urologia",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_urologia",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-urologia",$dados);

    } // END >> Fun::lp_urologia()

    public function lp_psiquiatria()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Psiquiatra? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp_psiquiatria",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_psiquiatria",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-psiquiatria",$dados);

    } // END >> Fun::lp_psiquiatria()

    public function lp_otorrino()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Otorrino? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-otorrino",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_otorrino",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-otorrino",$dados);

    } // END >> Fun::lp_otorrino()

    public function lp_neurologista()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Neurologista? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-neurologista",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_neurologista",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-neurologista",$dados);

    } // END >> Fun::lp_neurologista()

    public function lp_telemedicina()
    {
        // Variaveis
        $dados = null;
        $msg = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Telemedicina? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "url" => base_url() . "lp-telemedicina",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_telemedicina",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-telemedicina",$dados);

    } // END >> Fun::lp_telemedicina()

    public function lp_implante()
    {
        // Variaveis
        $dados = null;
        $msg = null;
        $unidade = null;

        if (isset($_POST['name']))
        {
            $msg = $this->enviaContatoHuggy();
        }

        $unidades = $this->unidade->get();

        $dados = array(
            "seo" => array(
                "titulo" => "Procurando Implante Dentário? | SOS Dr",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel",
                "palavras" => "médico, dentista, exames, saúde, bem-estar, tratamento, diagnóstico, médicos, dentistas,
					especialidades, laboratório, policlínica, consulta, procedimento, marília, dr, sos, doutor,
					médico, dentista, exames, sos dr, dotor, doctor"
            ),
            "smo" => array(
                "imagem" => "",
                "titulo" => "O que é SOS Dr?",
                "descricao" => "Cuide da sua saúde na SOS Dr, centro médico e odontológico, sem fila de espera e com preço acessivel"
            ),
            "unidades" =>$unidades,
            "url" => base_url() . "lp-implante",
            "minutos" => $this->cassinoSos(),
            "pag" => "lp_telemedicina",
            "msg" => $msg
        );

        $this->load->view("default/site/lps/lp-implante",$dados);

    } // END >> Fun::lp_telemedicina()



    /**
     * Este método tem o objetivo de chamar dinamicamente views do Aplicativo,
     * muito usado para mudar de paginas atraves do JS sem precisar criar métodos
     * @param  STRING $url [Url ex: pasta _ arquivo (Sem extensão) = paginas_tutorial]
     * @return VIEW uma view referente a url informada
     */
    public function views($url = null)
    {
        // Váriavel
        $dados = null;

        // Pega a URL
        $url = str_replace('_', '/', $url);

        $this->load->view("default/site/" . $url ,$dados);
    }

}
