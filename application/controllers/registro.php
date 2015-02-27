<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //load de bootstrap y contenido
            $data['title']="Registro Rancho Mágico";
            $this->load->view('template/header',$data);
            $this->load->view('registro_usuario_view');
            $this->load->view('template/footer'); 
	}
        
        function alta() {
            //valida los datos insertados
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[1]|max_length[12]|xss_clean');
            $this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|min_length[1]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('apellidom', 'Apellido Materno', 'trim|required|min_length[1]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('correo','Correo Electrónico','trim|requiered|valid_mail');
            $this->form_validation->set_rules('usuario', 'Nombre de Usuario', 'trim|required|min_length[5]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required|matches[contrasena2]|md5');
            $this->form_validation->set_rules('contrasena2', 'Confirmar Contraseña', 'trim|required');
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
            $data['fechaAlta'] = $_POST['fechaAlta'];
            $data['usuario'] = $_POST['usuario'];
            $data['contrasena'] = $_POST['contrasena'];
            $data['contrasena2'] = $_POST['contrasena2'];
            //enviar al modelo, para el insert de los datos
            $this->load->model('registro_model');
            $this->registro_model->insert($data);
            //redirecciona a esta pagina
            $this->load->view('template/header');
            $this->load->view('login_usuario_view');
            $this->load->view('template/footer');
            }
        }
        
        

}

/* End of file welcome.php */
/* Location: ./application/controllers/registro.php */