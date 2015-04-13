<?php

class usuario_modelo extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->dbutil();
        
    }

    function listar($strConsulta) {
        $query = $this->db->query("select * from usuario where 1=1 " . $strConsulta);
        return $query->result_array();
    }
    
   

}

?>