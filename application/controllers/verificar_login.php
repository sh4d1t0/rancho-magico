<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Verificar_login extends CI_Controller {
    function __construct() {
        parent::__construct();
        //Carga sesion y conecta a la base
        $this->load->model('usuario_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required|xss_clean|callback_checar_basededatos');
 
        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('login_usuario_view');
            $this->load->view('template/footer');
            } else {
                //Ingresa al area de usuarios
                redirect('bienvenida_usuarios', 'refresh');
            }       
     }
 
     function checar_basededatos($contrasena) {
         //Validacion del campo perfecta.Validar contra base de datos
         //El "usuario" que se introdujo en el formulario se guarda en "$usuario"
         $usuario = $this->input->post('usuario');
         //Consulta el usuario en la base de datos y le envío la contraseña
         $result = $this->login->login($usuario, $contrasena);
         if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 //create the session
                 $sess_array = array(
                     'idUsuario' => $row->idUsuario,
                     'primer_nombre' => $row->primer_nombre,
                     'segundo_nombre' => $row->segundo_nombre,
                     'apellidop' => $row->apellidop,
                     'apellidom' => $row->apellidom,
                     'correo' => $row->correo,
                     'telefono' => $row->telefono,
                     'usuario' => $row->usuario
                         );
                 //Establece sesion con valor de la base de datos
                 $this->session->set_userdata('logged_in', $sess_array);
                 }
          return TRUE;
          } else {
              //Si el formulario valida falso
              $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
              $this->form_validation->set_message('checar_basededatos', 'Usuario o Contraseña Invalido');
              return FALSE;
          }
      }
}
/* End of file c_verifylogin.php */
/* Location: ./application/controllers/c_verifylogin.php */