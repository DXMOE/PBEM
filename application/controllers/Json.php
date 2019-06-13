<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

	public function j_consolas()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetConsolas();
		echo json_encode($consolas);
	}

	public function j_catalago()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetCatalago();
		echo json_encode($consolas);
	}

	public function j_horas()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetHoras();
		echo json_encode($consolas);
	}

	public function j_membresia()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetMembresia();
		echo json_encode($consolas);
	}

	public function j_promociones()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetPromociones();
		echo json_encode($consolas);
	}

	public function j_puntos()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetPuntos();
		echo json_encode($consolas);
	}

	public function j_puntos_horas()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetPuntoshoras();
		echo json_encode($consolas);
	}

	public function j_roles()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetRoles();
		echo json_encode($consolas);
	}

	public function j_saldos()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetSaldos();
		echo json_encode($consolas);
	}

	public function j_users()
	{
		$this->load->model('json_model');
		$consolas = $this->json_model->GetUsers();
		echo json_encode($consolas);
	}
}
