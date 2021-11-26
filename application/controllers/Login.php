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

	public function logar()
	{
		$username = $this->input->post("username");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->model_usuarios->logarUsuarios($username, $senha);
		if ($usuario) {

			$this->session->set_userdata('usuario_logado', $usuario);
			$this->session->set_flashdata('success', "Logado com sucesso!!");
			redirect('/');
		} else {
			$this->session->set_flashdata('danger', "Usuario ou senha invalidos");
			redirect('login');
		}
	}
}