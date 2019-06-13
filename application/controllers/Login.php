<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
 $this->load->model('login_model');
 $this->load->library(array('session','form_validation'));
 $this->load->helper(array('url','form'));
 $this->load->database('default');
    }

 public function index()
 {
 switch ($this->session->userdata('nu_rol')) {
 case '':
 $data['token'] = $this->token();
 $data['titulo'] = 'Login con roles de usuario en codeigniter';
 $this->load->view('login_view',$data);
 break;
 case '1':
 redirect(base_url().'administrador');
 break;
 case '2':
 redirect(base_url().'empleado');
 break;
 case '3':
 redirect(base_url().'cliente');
 break;
 default:
 $data['titulo'] = 'Login con roles de usuario en codeigniter';
 $this->load->view('login_view',$data);
 break;
 }
 }

public function new_user()
 {
 if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
 {
            $this->form_validation->set_rules('usuario', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('contraseña', 'contraseña', 'required|trim|min_length[5]|max_length[150]|xss_clean');

            //lanzamos mensajes de error si es que los hay

 if($this->form_validation->run() == FALSE)
 {
 $this->index();
 }else{
 $usuario = $this->input->post('usuario');
 $contraseña = sha1($this->input->post('contraseña'));
 $check_user = $this->login_model->login_user($usuario,$contraseña);
 $querycharge = $this->login_model->login_user($usuario,$contraseña);
 // $querycharge2 = $this->login_model->login_user2($usuario,$contraseña);
 if($check_user == TRUE)
 {
 $data = array(
                 'is_logued_in' => TRUE,
                 'id_usuario' => $check_user->id,
                 'nu_rol' => $check_user->nu_rol,
                 'usuario' => $check_user->usuario,
                 'nombre' => $querycharge->nombre,
                 'paterno' => $querycharge->paterno,
                 'materno' => $querycharge->materno,
                 'correo' => $querycharge->correo,
                 


             );
 $this->session->set_userdata($data);
 $this->index();
 }
 }
 }else{
 redirect(base_url().'login');
 }
 }

 public function token()
 {
 $token = md5(uniqid(rand(),true));
 $this->session->set_userdata('token',$token);
 return $token;
 }

 public function logout_ci()
 {
 $this->session->sess_destroy();
 $this->index();
 }
}
