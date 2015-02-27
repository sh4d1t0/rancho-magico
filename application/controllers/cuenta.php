<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuenta extends CI_Controller{
    
    
function __construct() {
        parent::__construct();
        $this->load->model('usuario_model','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
}
 
    public function index(){
        
        if($this->session->userdata('logged_in'))
        {
         
            $session_data = $this->session->userdata('logged_in');
            $data['idUsuario'] = $session_data['idUsuario'];
            $data['primer_nombre'] = $session_data['primer_nombre'];
            $data['segundo_nombre'] = $session_data['segundo_nombre'];
            $data['apellidop'] = $session_data['apellidop'];
            $data['apellidom'] = $session_data['apellidom'];
            $data['correo'] = $session_data['correo'];
            $data['telefono'] = $session_data['telefono'];
            $data['usuario'] = $session_data['usuario'];
            
            
            
            //Obtener datos de la tabla 'usuarios'
            //$consulta = $this->usuario_model->datos($data['idUsuario']); //llamamos a la función getData() del modelo creado anteriormente.
            $data['title']="Panel Usuario";
            $data['pedidosact']="active";
            $this->load->view('template/header',$data);
            $this->load->view('template/menu_usuario',$data);
            $this->load->view('cuenta_view', $data);
            $this->load->view('template/footer');
        } else {
        //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        
        
     
        
    }
    
    
    function modificar(){
            
            
            //valida los datos insertados
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[1]|max_length[12]|xss_clean');
            $this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|min_length[1]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('apellidom', 'Apellido Materno', 'trim|required|min_length[1]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('correo','Correo Electrónico','trim|requiered|valid_mail');
            //¿La validacion del formulario no paso?
            if ($this->form_validation->run() == FALSE)
            {
                $this->index();
            }
            else
            {
     
            
            //Recoge datos del form
            $data['nombre'] = $_POST['nombre']; 
            $data['nombre2'] = $_POST['nombre2'];
            $data['apellidop'] = $_POST['apellidop'];
            $data['apellidom'] = $_POST['apellidom'];
            $data['correo'] = $_POST['correo'];
            $data['telefono'] = $_POST['telefono'];
            $data['usuario'] = $_POST['usuario'];
            //enviar al modelo, para el insert de los datos
            $this->load->model('registro_model');
            $this->registro_model->update($data);
            //redirecciona a esta pagina
            $this->load->view('template/header');
            $this->load->view('template/menu_usuario');
            $this->load->view('cuenta_view');
            $this->load->view('template/footer');
            }
            
        }
    
    
}