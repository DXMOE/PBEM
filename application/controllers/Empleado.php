<?php

class  Empleado extends CI_Controller{
  public function _construct(){
    parent::costruct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->library(array('session', 'grocery_CRUD'));
  }
  public function index(){
    if($this->session->userdata('nu_rol') == FALSE || $this->session->userdata('nu_rol') != '2')
    {
      redirect(base_url().'login');
    }
    $output=(object) array ('output' => '', 'js_files' => array(), 'css_files'=> array());
    $this->cargar_vistas($output);
  }

  function cargar_vistas($output=null){
    $this->load->view('empleado.php', $output);
  }

  

  public function eg_users()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->where('nu_rol', '3');

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_users');
      $crud->unset_fields('nu_rol');
      $crud->set_subject('Cliente');
      $crud->set_language("spanish");
      $crud->set_relation('nu_rol','eg_roles','nombre');
      $crud->display_as('nu_rol','Tipo de usuario');
      $crud->change_field_type('contraseña','password');
      $crud->callback_before_insert(array($this,'encrypt_password'));
      $crud->callback_before_update(array($this,'encrypt_password'));



      $crud->required_fields('nombre');
      $crud->required_fields('paterno');
      $crud->required_fields('materno');
      $crud->required_fields('usario');
      $crud->required_fields('rol');

      $crud->set_field_upload('imagen','assets/uploads/images_usuarios');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }



}
