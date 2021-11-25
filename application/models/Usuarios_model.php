<?php 

class Usuarios_model extends CI_Model {
    public function cadastra_usuario($usuario){
        $this->db->insert("usuarios_tb",$usuario);
    }
}