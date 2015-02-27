<?php
class Registro_model extends CI_Model {
    
    function Registro_model() {
        parent::__construct(); //llamada al constructor model
    }
    
    function insert($data) {
        $this->db->set('primer_nombre', $data['nombre']);
        $this->db->set('segundo_nombre',$data['nombre2']);
        $this->db->set('apellidop',$data['apellidop']);
        $this->db->set('apellidom',$data['apellidom']);
        $this->db->set('correo',$data['correo']);
        $this->db->set('telefono',$data['telefono']);
        $this->db->set('fechaAlta',$data['fechaAlta']);
        $this->db->set('usuario',$data['usuario']);
        $this->db->set('contrasena',$data['contrasena']);
        $this->db->insert('usuario');
        
        
    }
    
    function update($data){
        
        $this->db->where('usuario', $usuario);
        $this->db->update('usuario', $data);
        
        
    }
    
    
}

