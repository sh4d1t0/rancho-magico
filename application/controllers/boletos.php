<?php
class Boletos extends CI_Controller {
    
        function __construct() {
        parent::__construct();
        $this->load->model('usuario_model','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
        
    }
    
    
    function index()
    {   
        
        if($this->session->userdata('logged_in'))
        {   
            $session_data = $this->session->userdata('logged_in');
            $data['usuario'] = $session_data['usuario'];
            $data['title']="Compra de Boletos";
            $this->load->view('template/header',$data);
            $this->load->view('template/menu_usuario',$data);
            $this->load->view('boletos_view',$data);
    }else
    {
        redirect('login', 'refresh');
        
    }
}
}