<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Herois extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Herois - CI Dota";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/herois', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}