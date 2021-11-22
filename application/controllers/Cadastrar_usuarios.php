<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar_usuarios extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Cadastro de Usuários - CI Dota";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cadastro_usuarios', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}	
}