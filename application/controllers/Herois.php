<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Herois extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("herois_model");
		$this->load->model("categorias_model", "categorias");
	}

	public function index()
	{
		$dados['titulo'] = "Herois - CI Dota";
		$dados['herois'] = $this->herois_model->listarHerois();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/herois', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function formulario(){
		$dados['titulo'] = "Herois - CI Dota";
		$dados['categorias'] = $this->categorias->listarCategorias();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/formulario_herois', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}