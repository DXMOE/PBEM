<?php
  class Json_model extends CI_Model{
    public function GetConsolas(){
      $q = $this->db->get('eg_consolas');
      return $q->result();
    }

    public function GetCatalago(){
      $q = $this->db->get('eg_catalago');
      return $q->result();
    }

    public function GetHoras(){
      $q = $this->db->get('eg_horas');
      return $q->result();
    }

    public function GetMembresia(){
      $q = $this->db->get('eg_membresia');
      return $q->result();
    }

    public function GetPromociones(){
      $q = $this->db->get('eg_promociones');
      return $q->result();
    }

    public function GetPuntos(){
      $q = $this->db->get('eg_puntos');
      return $q->result();
    }

    public function GetPuntoshoras(){
      $q = $this->db->get('eg_puntos_horas');
      return $q->result();
    }

    public function GetRoles(){
      $q = $this->db->get('eg_roles');
      return $q->result();
    }

    public function GetSaldos(){
      $q = $this->db->get('eg_saldos');
      return $q->result();
    }

    public function GetUsers(){
      $q = $this->db->get('eg_users');
      return $q->result();
    }

    }
