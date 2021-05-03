<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook_model extends CI_Model
{

    function __construct()
    {
        // Executa o construtor da classe pai.
        parent::__construct();
    }


    /*

      ----------------------------------------------------------------------
      Os métodos abaixo são métodos primarios, ou seja, para o bom
      funcionamento do sistema eles devem ser criados em todos os models,
      sendo um padrão. Os métodos secundarios são metodos especificos apenas
      para o model em questão.
      -----------------------------------------------------------------------

   */


    // Esse metodo retorna a quantidade dados da tabela.
    public function num_rows($where = null)
    {
        $query = $this->db->get_where("painel_ebook",$where);
        return $query->num_rows();

    } // Fim num_rows().


    // Query Row
    public function query_rows($query = null)
    {
        $q = $this->db->query($query);
        return $q->num_rows();
    }


    // Query
    public function query($query = null)
    {
        $q = $this->db->query($query);
        return $q->result();
    }


    // Esse metodo retorna todos os dados da tabela
    public function get($where = null)
    {
        $this->db->order_by("id_ebook","DESC");
        $query = $this->db->get_where("painel_ebook",$where);
        return $query->result();
        /*
            O metodo result retorna os dados em Array de objetos.
        */
    } // Fim get().


    // Esse metodo retorna todos os dados da tabela com Where.
    public function get_row($where = null)
    {
        $query = $this->db->get_where("painel_ebook",$where);
        return $query->row();

    } // Fim get_row().


    // Esse metodo inclui um dado na tabela e retorna o seu ID.
    public function insert($salva = null)
    {
        $query = $this->db->insert("painel_ebook",$salva);
        return $this->db->insert_id();

        /*
            insert_id() retorna o ultimo ID salvo no banco de dados.
        */

    } // Fim insert().



    // Deleta um dado da tabela.
    public function delete($where = null)
    {
        $query = $this->db->delete("painel_ebook",$where);
        return $query;

    } // Fim delete().


    // Esse metodo modifica um item da tabla
    public function update($dados = null, $where = null)
    {
        $query = $this->db->update("painel_ebook",$dados,$where);
        return $query;

    } // Fim update().





} // Fim da Classe
