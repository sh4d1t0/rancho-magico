<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Pedido_model extends CI_Model {
 
            function Pedido_model() {
                parent::__construct(); //llamada al constructor de Model.
                         }
 
            function getData($idUsuario) {
                
                
                $this->db->select('*');
                $this->db->from('pedido');       
                $this->db->where('idUsuario', $idUsuario);
                $consulta=$this->db->get();
                return $consulta->result();
                
                //$pedidos = $this->db->get('pedido'); //obtenemos la tabla 'contacto'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
                //return $pedidos->result(); //devolvemos el resultado de lanzar la query.
 }
 
            }
