<?php

class Home_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        
    }
        
    public function get_eg_catalago()
    {
        
        
        $consulta = $this->db->query('SELECT * FROM eg_catalago');
        return $consulta->result();
    }
    
    
   
}

