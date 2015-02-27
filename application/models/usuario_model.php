<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Usuario_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
    function login($usuario, $contrasena) {
        //Crear consulta
        $this->db->select('idUsuario,primer_nombre,segundo_nombre,apellidop,apellidom,correo,telefono,usuario,contrasena');
        $this->db->from('usuario');
        $this->db->where('usuario', $usuario);
        $this->db->where('contrasena', MD5($contrasena));
        $this->db->limit(1);
         
        //Ejecutar consulta y guardar en $query
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //La informacion es veridica
        } else {
            return false; //La informacion es falsa
        }
    }
    
    
    
        function datos($idUsuario) {
        //Crear consulta
        $this->db->select('idUsuario,primer_nombre,segundo_nombre,apellidop,apellidom,correo,telefono,usuario');
        $this->db->from('usuario');
        $this->db->where('idUsuario', $idUsuario);
        $this->db->limit(1);
         
        //Ejecutar consulta y guardar en $query
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //La informacion es veridica
        } else {
            return false; //La informacion es falsa
        }
    }
    

        
        
        
        
    }


  
/* End of file m_login.php */
/* Location: ./application/models/m_login.php */