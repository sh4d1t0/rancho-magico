<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carrito_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p> &iexcl;Tu carrito esta vacio!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}
                
                
                if($this->session->userdata('logged_in')){   
                    $session_data = $this->session->userdata('logged_in');
                    $data['usuario'] = $session_data['usuario'];
                    $data['title']="Carrito de Compras";
                    $this->load->view('template/menu_usuario',$data);
                    $this->load->view('template/header',$data);
                    $this->load->view('carrito_view', $this->data);
                    $this->load->view('template/footer');
    }else
    {
        redirect('login', 'refresh');
        
    }
	}

	public function add()
	{
		$this->load->model('carrito_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nombre'),
			'price' => $this->input->post('precio'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('carrito');
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('carrito');
	}	

	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{			
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			
			$this->carrito_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		
		redirect('carrito');
	}	
}