<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('herois_model');

		$dados['titulo'] = "Home - CI Dota";
		$dados['herois'] = $this->herois_model->listarHerois();

		// Verificar se a variavel esta chegando
		echo "<pre>";
		print_r($dados);
		echo "</pre>";
		exit;
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/index', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}