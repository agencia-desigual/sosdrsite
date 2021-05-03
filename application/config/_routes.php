<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'principal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Serviços
$route['servicos/consultas-medicas'] = "servico/medicos";
$route['servicos/consultas-odontologicas'] = "servico/odontologicos";
$route['servicos/exames-diversos'] = "servico/exames";

// Blog
$route['blog'] = "principal/blog";
$route['blog/(:any)'] = "principal/blogDetalhes/$1";


// Relatorio
$route['gerar_excel_consulta'] = "principal/gerarExcel";
$route['gerar_excel_ebook'] = "principal/gerarExcelEbook";

$route['agendamento'] = "principal/teste";
$route['agendamento/(:any)'] = "principal/teste/$1";
$route['agendamento/(:any)/(:any)'] = "principal/teste/$1/$2";

$route['medicinadotrabalho'] = "principal/lp_medTrabalho";
$route['lp-cardiologia'] = "principal/lp_cardiologia";
$route['lp-ginecologia-obstetricia'] = "principal/lp_ginecologia_obstetricia";
$route['lp-odontologia'] = "principal/lp_odontologia";
$route['lp-oftalmologia'] = "principal/lp_oftalmologia";
$route['lp-clinico-geral'] = "principal/lp_clinico_geral";

// LPS CELL
$route['lp-cardiologia-mobile'] = "principal/lp_cardiologia_mobile";
$route['lp-ginecologia-obstetricia-mobile'] = "principal/lp_ginecologia_obstetricia_mobile";
$route['lp-odontologia-mobile'] = "principal/lp_odontologia_mobile";
$route['lp-oftalmologia-mobile'] = "principal/lp_oftalmologia_mobile";
$route['lp-clinico-geral-mobile'] = "principal/lp_clinico_geral_mobile";

$route['lp-exames-laboratoriais'] = "principal/lp_exames_laboratoriais";
$route['lp-ultrassom'] = "principal/lp_ultrassom";
$route["lp-endocrinologista"] = "principal/lp_endocrinologista";
$route["lp-psiquiatria"] = "principal/lp_psiquiatria";
$route["lp-ortopedia"] = "principal/lp_ortopedia";
$route["lp-dermatologia"] = "principal/lp_dermatologia";

$route['ebook'] = "principal/lp_ebook";
$route['ebook/cadastro'] = "principal/lp_ebook_cadastro";

$route['ebook2'] = "principal/lp_ebook_2";
$route['ebook2/cadastro2'] = "principal/lp_ebook_cadastro2";


$route['ganhe-consulta'] = "principal/lp_ganhe_consulta";
$route['ganhe-consulta/amigos'] = "principal/lp_ganhe_consulta_amigos";
$route['ganhe-consulta/cadastro'] = "principal/lp_ganhe_consulta_cadastro";

$route['ganhe-consulta2'] = "principal/lp_ganhe_consulta2";
$route['ganhe-consulta2/amigos2'] = "principal/lp_ganhe_consulta_amigos2";
$route['ganhe-consulta2/cadastro2'] = "principal/lp_ganhe_consulta_cadastro2";

// Demais Painas
$route['quem-somos'] = "principal/quemSomos";
$route['quer-ajuda'] = "principal/faq";
$route['trabalhe-conosco'] = "principal/trabalheConosco";
$route['contato'] = "principal/contato";
$route['agendamento-realizado'] = "principal/sucesso";

$route['views/(:any)'] = "principal/views/$1";
$route['logouf'] = "principal/sair";

// Metodos Ajax
$route['ajax/trabalhe-conosco'] = "ajax/trabalheConosco";
$route['ajax/contato'] = "ajax/contato";
$route['ajax/newsletter'] = "ajax/newsletter";
$route['ajax/login'] = "ajax/login";
$route['ajax/verifica-cpf'] = "ajax/verificaCpf";
$route['ajax/ebook'] = "ajax/contatoEbook";
$route['ajax/codigo'] = "ajax/validarCodigoEbook";
$route['ajax/ganhe_consulta_1'] = "ajax/ganheConsulta1";
$route['ajax/ganhe_consulta_2/(:num)'] = "ajax/ganheConsulta2/$1";
$route['ajax/consulta'] = "ajax/validarCodigoConsulta";


$route['ajax/cadastro-lp'] = "ajax/cadastroLP";

// Rotas do Painel
$route['painel'] = "painel/dashboard";

$route['painel/servicos'] = "painel/servicos";
$route['painel/servicos/editar/(:any)'] = "painel/servicosEditar/$1";
$route['painel/ajax-editar-servico'] = "painel/ajaxEditarServico";
$route['painel/servicos/cadastrar'] = "painel/servicosCadastrar";
$route['painel/ajax-cadastrar-servico'] = "painel/ajaxCadastrarServico";
$route['painel/ajax-excluir-servico/(:any)'] = "painel/ajaxExcluirServico/$1";

$route['painel/usuarios'] = "painel/usuarios";
$route['painel/login'] = "painel/login";
$route['painel/sair'] = "painel/sair";
$route['painel/ajax-login'] = "painel/ajaxLogin";

$route['painel/blog'] = "painel/blog";
$route['painel/blog/cadastrar'] = "painel/blogCadastrar";
$route['painel/blog/editar/(:any)'] = "painel/blogEditar/$1";
$route['painel/ajax-cadastrar-blog'] = "painel/ajaxCadastrarBlog";
$route['painel/ajax-excluir-blog/(:any)'] = "painel/ajaxExcluirBlog/$1";
$route['painel/ajax-editar-blog'] = "painel/ajaxEditarBlog";
