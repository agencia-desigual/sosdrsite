<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SOSDR - Relatório de Consultas</title>
    <head>
<body>
<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'contatoLP-'.date('d-m-y-H-i-s').'.xls';

    // Criamos uma tabela HTML com o formato da planilha
    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="4">Relatório de Contato</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td><b>ID</b></td>';
    $html .= '<td><b>Nome</b></td>';
    $html .= '<td><b>Contato</b></td>';
    $html .= '<td><b>Data de Cadastro</b></td>';
    $html .= '</tr>';


    foreach ($consultas as $consulta)
    {
        $html .= '<tr>';
        $html .= '<td>'.$consulta->id.'</td>';
        $html .= '<td>'.$consulta->nome.'</td>';
        $html .= '<td>'.$consulta->contato.'</td>';
        $html .= '<td>'.date('d/m/Y', strtotime($consulta->data_cadastro)).' '.date('H:i:s', strtotime($consulta->data_cadastro)).'</td>';
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