<?php 

class Herois_model extends CI_Model {
    public function listarHerois(){
        return $this->db->get("herois_tb")->result_array();
    }
}

?>