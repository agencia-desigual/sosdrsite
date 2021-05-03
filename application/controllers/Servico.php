<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico extends CI_Controller
{

  // Método construtor da classe
	function __construct()
	{
		parent::__construct();
        $this->load->model("Servico_model","servico");
        $this->load->model("Unidade_model","unidade");
        $this->load->model("ServicoUnidade_model","servicoUnidade");

    }




	public function medicos()
	{
        $buscaConsultas = $busca = $this->servico->get(['categoria' => 'consultas', 'status' => 1]);

        foreach ($buscaConsultas as $consulta) 
		{
			// Aux
			$aux = json_decode($consulta->id_unidade);

			if(!empty($aux))
			{
				// percorre 
				foreach ($aux as $aa)
				{
					$aa->unidade = $this->unidade->get_row(['id_unidades' => $aa->id]);
				}

				$consulta->id_unidade = $aux;
			}
		}




        $buscaUnidades = $this->servicoUnidade->get();

        if (!empty($buscaUnidades))
        {
            foreach ($buscaUnidades as $buscaUnidade)
            {

                // Busca o nome da unidade
                $nomeUnidade = $this->unidade->get(['id_unidades' => $buscaUnidade->id_unidade]);
                $buscaUnidade->nome = $nomeUnidade[0]->nome;
            }
        }


        $dados = array(
			"seo" => array(
				"titulo" => "Consultas médicas | SOS Dr",
				"descricao" => "Agende consultas médicas online na SOS Dr. Atendimentos rápidos e especialistas capacitados.",
				"palavras" => "médicos, especialistas, pediatra, clínico geral, ginecologia, obstetrícia, oftalmologia,
					ortopedia, traumatologia, psicologia, agendamento, tratamento, diagnósticos, Marília, médico, dentista,
					exames, sos, dr, sos dr, doutor, dotor, doctor"
			),
			"smo" => array(
				"imagem" => "",
				"titulo" => "Consultas Médicas na SOS Dr",
				"descricao" => "Agende sua consulta com os melhores especialistas. Atendimentos rápidos e profissionais
					atenciosos, que se preocupam com seu bem-estar."
			),
			"url" => base_url() . "servicos/consultas-medicas",
			"pag" => "servico",
			"idgruposervico" => "144",
			"icones" => 'arquivos/icones/medicos/',
			"titulo" => "Consultas Médicas",
			"capa" => "bg-servicos.jpg",
			"descricao" => "Especialistas em cuidar da sua saúde </br>
											com a qualidade que você merece.",
            "consultas" => $buscaConsultas,
            "buscaUnidades" => $buscaUnidades
		);

		$this->load->view("default/site/servicos",$dados);
	}




	public function odontologicos()
	{
        $buscaConsultas = $busca = $this->servico->get(['categoria' => 'odontologia', 'status' => 1]);

        foreach ($buscaConsultas as $consulta) 
		{
			// Aux
			$aux = json_decode($consulta->id_unidade);

			if(!empty($aux) && is_array($aux))
			{
				// percorre 
				foreach ($aux as $aa)
				{
					$aa->unidade = $this->unidade->get_row(['id_unidades' => $aa->id]);
				}

				$consulta->id_unidade = $aux;
			}
		}




        $buscaUnidades = $this->servicoUnidade->get();

        if (!empty($buscaUnidades))
        {
            foreach ($buscaUnidades as $buscaUnidade)
            {

                // Busca o nome da unidade
                $nomeUnidade = $this->unidade->get(['id_unidades' => $buscaUnidade->id_unidade]);
                $buscaUnidade->nome = $nomeUnidade[0]->nome;
            }
        }

        $dados = array(
			"seo" => array(
				"titulo" => "Consultas odontológicas | SOS Dr",
				"descricao" => "Tratamentos odontológicos na SOS Dr, melhores dentistas, preço baixo e qualidade. Os melhores médicos em Marília",
				"palavras" => "implante, faceta, clareamento dental, aparelho ortodôntico, dentes, sorriso, língua, maxilar,
					ortodontia, boca, médico, dentista, exames, sos dr, doutor, dotor, doctor, marília, dentista"
			),
			"smo" => array(
				"imagem" => "",
				"titulo" => "Tratamentos odontológicos na SOS Dr",
				"descricao" => "Tratamentos odontológicos diversos. Cuide de sua saúde bucal e deixe o seu sorriso ainda
					mais bonito. Agente agora mesmo!"
			),
			"url" => base_url() . "servicos/consultas-odontologicas",
			"pag" => "servico",
			"idgruposervico" => "145",
			"icones" => 'arquivos/icones/odonto/',
			"titulo" => "Consultas Odontológicas",
			"capa" => "bg-odonto.png",
			"descricao" => "Cuide da sua saúde bucal e deixe seu sorriso ainda mais bonito com os diversos tipos de atendimentos, desde limpezas simples até tratamentos mais complexos.",
		    "consultas" => $buscaConsultas,
            "buscaUnidades" => $buscaUnidades
        );




		$this->load->view("default/site/servicos",$dados);
	}




	public function exames()
	{
        $buscaExames = $busca = $this->servico->get(['categoria' => 'exames', 'status' => 1]);

        $buscaUnidade = $this->servicoUnidade->get();

		$dados = array(
		    "unidades" => $buscaUnidade,
			"seo" => array(
				"titulo" => "Exames Diversos | SOS Dr",
				"descricao" => "Exames médicos na SOS Dr, o melhor preço em exames laboratorial e de imagem.",
				"palavras" => "hemograma, leucócitos, plaquetas, mamografia, densitometria óssea, ressonância
					magnética, colesterol, Tomografia computadorizada, ultra-sonografia, urina, glicose,
					glicemia, exame, raio x, radiologia, ultrassom, parasitológico, fezes, vermes, marília,
					médico, dentista, exames médicos, sos dr, dr, sos, doutor, dotor, doctor"
			),
			"smo" => array(
				"imagem" => "",
				"titulo" => "Agende exames médicos na SOS Dr",
				"descricao" => "Os exames laboratoriais e de imagem solicitados pelo médico, podem ser feitos aqui
					também. Agende seu exame de forma rápida, fácil e com preço acessível."
			),
			"url" => base_url() . "servicos/exames-diversos",
			"pag" => "servico",
			"idgruposervico" => "146",
			"icones" => 'arquivos/icones/exames/',
			"titulo" => "Exames",
			"capa" => "bg-exames.png",
			"descricao" => "Exames laboratoriais e de imagem </br>
											para complementar sua consulta.",
            "exames" => $buscaExames
		);


		$this->load->view("default/site/servicos",$dados);
	}

}
