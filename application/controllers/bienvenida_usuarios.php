<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenida_usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario_model','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
        
    }
 
    function index() {
        
        

        
        
        
        if($this->session->userdata('logged_in'))
        {
            $this->load->model('pedido_model'); //cargamos el modelo
            
            //load de vistas
            $session_data = $this->session->userdata('logged_in');
            $data['idUsuario'] = $session_data['idUsuario'];
            $data['primer_nombre'] = $session_data['primer_nombre'];
            $data['segundo_nombre'] = $session_data['segundo_nombre'];
            $data['apellidop'] = $session_data['apellidop'];
            $data['apellidom'] = $session_data['apellidom'];
            $data['telefono'] = $session_data['telefono'];
            $data['usuario'] = $session_data['usuario'];
            
            
            //Obtener datos de la tabla 'pedido'
             $consulta = $this->pedido_model->getData($data['idUsuario']); //llamamos a la función getData() del modelo creado anteriormente.
             //var_dump($pedidos);
            $data['pedidos'] = $consulta;
            $data['title']="Panel Usuario";
            $data['pedidosact']="active";
            $this->load->view('template/header',$data);
            $this->load->view('template/menu_usuario',$data);
            $this->load->view('bienvenidausuario_view', $data);
            $this->load->view('template/footer');
        } else {
        //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        
        
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect('login', 'refresh');
     }
 
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */