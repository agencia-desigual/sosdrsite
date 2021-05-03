<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SOSDR - Relatório de Consultas</title>
    <head>
<body>
<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'consultas-'.date('d-m-y-H-i-s').'.xls';

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
    $html .= '<td><b>Nome Amigo 1</b></td>';
    $html .= '<td><b>Celular Amigo 1</b></td>';
    $html .= '<td><b>Nome Amigo 2</b></td>';
    $html .= '<td><b>Celular Amigo 2</b></td>';
    $html .= '<td><b>Nome Amigo 3</b></td>';
    $html .= '<td><b>Celular Amigo 3</b></td>';
    $html .= '<td><b>status</b></td>';
    $html .= '<td><b>Data de Cadastro</b></td>';
    $html .= '<td><b>Observações</b></td>';
    $html .= '</tr>';


    foreach ($consultas as $conulta)
    {
        $html .= '<tr>';
        $html .= '<td>'.$conulta->id_consulta.'</td>';
        $html .= '<td>'.$conulta->nome.'</td>';
        $html .= '<td>'.$conulta->celular.'</td>';
        $html .= '<td>'.$conulta->nome1.'</td>';
        $html .= '<td>'.$conulta->celular1.'</td>';
        $html .= '<td>'.$conulta->nome2.'</td>';
        $html .= '<td>'.$conulta->celular2.'</td>';
        $html .= '<td>'.$conulta->nome3.'</td>';
        $html .= '<td>'.$conulta->celular3.'</td>';

        if($conulta->status == true)
        {
            $html .= '<td>Verificado</td>';
        }
        else
        {
            $html .= '<td>Não Verificado</td>';
        }

        $html .= '<td>'.date('d/m/Y', strtotime($conulta->data_cadastro)).' '.date('H:i:s', strtotime($conulta->data_cadastro)).'</td>';
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