<?php

/**
 * Este método é utilizado para fazer upload dos arquvos
 * @param  [type] $arquivo  [description]
 * @param  [type] $caminho  [description]
 * @param  [type] $extensao [description]
 * @return [string] $ret [Retorna o nome do arquivo ou em casa de erro FALSE]
 */

function upload_arquivo($arquivo = null, $caminho = null, $nome = null)
{
  if($nome == null)
  {
    $nome = date("Y-m-d-is");
  }


  // Carrega as bibliotecas padrões
  $ci = & get_instance();

  // Variaveis
  $ret = false; #Armazena o retorno da função
  $data = null; #Armazena o nome do arquivo que sera retornado

  $config['upload_path']          = $caminho;
  $config['allowed_types']        = '*';
  $config['file_name']            = $nome;
  $config['max_size']             = 99999999999999999;

  $ci->load->library('upload');
  $ci->upload->initialize($config);

  $ci->upload->do_upload($arquivo);

  $data = $ci->upload->data();
  $ret = $data['file_name'];


  // Gambis basica
   if($ret == 0)
   {
     $ret = null;
   }

  return $ret;
}


/**
 * Este método é utiliza para cortar imagens no tamanho ideal
 * e criar thumbimage
 * @param  [int] $width  [Tamnho da largura da imagem]
 * @param  [int] $height [Tamanho da altura da imagem]
 * @param  [string] $img    [caminho da imagem a ser cortada]
 * @param  [string] $nova   [caso crie nova imagem, caminho da nova imagem]
 * @return [boolean] True ou False
 */
function cortar_imagem($width = null, $height = null, $img = null, $nova = null)
{
    // Carrega as bibliotecas padrões
    $ci = & get_instance();

    // Verifica se será criada uma nova imagem
    if($nova != null)
    {
      $config['create_thumb'] = TRUE;
      $config['new_image'] = './' . $nova;
     }
    else
    {
      $config['create_thumb'] = FALSE;
    }

    $config['image_library']  = 'gd2';
    $config['source_image']   = './' . $img;
    $config['maintain_ratio'] = FALSE;
    $config['width']          = $width;
    $config['height']         = $height;

    $ci->load->library('image_lib', $config);
    return $ci->image_lib->resize();
} // fim cortar_imagem()



/**
    * Retorna o tamanho de um determinado arquivo em KB, MB, GB TB, etc
    * @author Rafael Wendel Pinheiro
    * @param String $arquivo O arquivo a ser verificado
    * @return String O tamanho do arquivo (já formatado)
*/
function tamanho_arquivo($arquivo) {
    $tamanhoarquivo = filesize($arquivo);

    /* Medidas */
    $medidas = array('KB', 'MB', 'GB', 'TB');

    /* Se for menor que 1KB arredonda para 1KB */
    if($tamanhoarquivo < 999){
        $tamanhoarquivo = 1000;
    }

    for ($i = 0; $tamanhoarquivo > 999; $i++){
        $tamanhoarquivo /= 1024;
    }

    return round($tamanhoarquivo) . $medidas[$i - 1];
}



/**
 * Este método tem como função retorna o espaço usado de um diretório
 * em Bytes.
 * @param  [string] $dir [Diretório que deseja medir o tamanho]
 * @return [int]   $count_size   [Peso do diretorio em Bytes]
 */
function foldersize($dir)
{
    $count_size = 0;
    $count = 0;
    $dir_array = scandir($dir);

    foreach($dir_array as $key=>$filename)
    {
       if($filename!=".." && $filename!=".")
       {
          if(is_dir($dir."/".$filename))
          {
             $new_foldersize = foldersize($dir."/".$filename);
             $count_size = $count_size + $new_foldersize;
          }
          elseif(is_file($dir."/".$filename))
          {
             $count_size = $count_size + filesize($dir."/".$filename);
             $count++;
          }
       }
    }

    return $count_size;
 }
