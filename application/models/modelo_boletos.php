<?php

    class Modelo_Boletos extends CI_Model {

    public function obtener_boletos(){

    $this->db->order_by('precio', 'asc');
    $query = $this->db->get('boleto')->result();

    return $query;

    }
	
	function get_product($id) {

    $query = $this->db->get_where('productos', array('id' => $id))->result();

    $result = $query[0];

    if ($result->valores) {
    $result->valores = explode(',',$result->valores);
    }

    return $result;
    }
	
	}