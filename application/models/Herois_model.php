<?php 

class Herois_model extends CI_Model {
    public function listarHerois(){
        $this->db->limit(8);
        $this->db->order_by("data_cadastro", "DESC");
        return $this->db->get("herois_tb")->result_array();
    }
}

?>