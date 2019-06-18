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

      $crud->set_theme('flexigrid');
      $crud->set_table('registros');
      $crud->unset_fields('hora');
      $crud->set_subject('Registros');
      $crud->set_language("spanish");
      $crud->set_relation('alumno_id','alumnos','{nombre} {ap_paterno} {ap_materno}');
      $crud->set_relation('servicios_id','servicios','nombre');
      $crud->set_relation('materia_id','materias','nombre');
      $crud->set_relation('semestre_id','semestres','nombre');

      $crud->display_as('alumno_id','Alumno');
       $crud->display_as('materia_id','Materia');
       $crud->display_as('servicios_id','Servicios');
       $crud->display_as('semestre_id','Semestre');
     

      $crud->required_fields('matricula');
      $crud->required_fields('alumno_id');
      $crud->required_fields('fecha');

      $crud->unset_delete();
      $crud->unset_edit();
     
      $crud->required_fields('materia_id');
    $crud->field_type('hora','invisible');

      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }



}
