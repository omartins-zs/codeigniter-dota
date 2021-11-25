<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastrar_usuarios extends CI_Controller
{

	public function index()
	{
		$dados['titulo'] = "Cadastro de Usuários - CI Dota";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cadastro_usuarios', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function novo()
	{
		$usuario = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"username" => $this->input->post("username"),
			"senha" => md5($this->input->post("senha"))
		);
		$this->load->model('usuarios_model');
		$this->usuarios_model->cadastra_usuario($usuario);
		$this->session->set_flashdata("success", "Usuario cadastrado com sucesso!!");
		redirect('cadastrar-usuarios');
	}
}