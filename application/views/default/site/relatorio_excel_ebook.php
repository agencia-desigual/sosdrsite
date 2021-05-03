<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SOSDR - Relatório de Consultas</title>
    <head>
<body>
<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'ebook-'.date('d-m-y-H-i-s').'.xls';

    // Criamos uma tabela HTML com o formato da planilha
    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="12">Relatório de Consultas</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td><b>ID</b></td>';
    $html .= '<td><b>Nome</b></td>';
    $html .= '<td><b>Celular</b></td>';
    $html .= '<td><b>Nome Amigo </b></td>';
    $html .= '<td><b>Celular Amigo </b></td>';
    $html .= '<td><b>Data de Cadastro</b></td>';
    $html .= '<td><b>Observação</b></td>';
    $html .= '</tr>';


    foreach ($contatos as $contato)
    {
        $html .= '<tr>';
        $html .= '<td>'.$contato->id_ebook.'</td>';
        $html .= '<td>'.$contato->nome.'</td>';
        $html .= '<td>'.$contato->celular.'</td>';
        $html .= '<td>'.$contato->nomeAmigo.'</td>';
        $html .= '<td>'.$contato->celularAmigo.'</td>';
        $html .= '<td>'.date('d/m/Y', strtotime($contato->data_cadastro)).' '.date('H:i:s', strtotime($contato->data_cadastro)).'</td>';
        $html .= '<td></td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    // Configurações header para forçar o download
    header ("Expires: Mon, 07 Jul 2016 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );

    echo $html;
    exit;


?>