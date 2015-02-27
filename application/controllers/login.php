<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
 	
    
    public function index()
	{
                        
                $data['title']="Acceso";
                $this->load->view('template/header',$data);
		$this->load->view('login_usuario_view');
                $this->load->view('template/footer');
	}
}