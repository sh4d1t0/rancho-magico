<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pago_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function insert_customer($data)
	{
		$this->db->insert('usuario', $data);

		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_order($data)
	{
		$this->db->insert('pedido', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('detallespedido', $data);
	}
        
        public function consulta_ultimo_id()
	{
            
                $consulta = $this->db->query('SELECT idPedido FROM pedido ORDER BY idPedido DESC LIMIT 1');
                $fila = $consulta->row_array();
                $ultimo_idPedido= $fila['idPedido'];
                return $ultimo_idPedido;
                
            }

	}
        
