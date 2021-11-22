<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$dados['titulo'] = "Login de Usuários - CI Dota";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/login', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}