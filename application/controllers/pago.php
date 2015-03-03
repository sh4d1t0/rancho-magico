<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pago extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('pago_model');
	}

	public function index()
                
	{
            
            if($this->session->userdata('logged_in')){
                
                $session_data=  $this->session->userdata('logged_in');
                $data['usuario'] = $session_data['usuario'];
                $data['primer_nombre'] = $session_data['primer_nombre'];
                $data['apellidop'] = $session_data['apellidop'];
                $ultimoIdPedido=$this->pago_model->consulta_ultimo_id();
//            Genera Folio    
                $uno=strtoupper(substr($data['primer_nombre'],0,2));
                $dos=strtoupper(substr($data['apellidop'],0,1));
                $nomconc=$uno.$dos;
                $primer=str_pad($ultimoIdPedido, 4, '0', 'str_pad_left');
                $verificador= mt_rand(0,9);
//            se genero folio
                $folio=$primer.$nomconc.$verificador;
                $data['numeroPedido']=(string)$folio;
//                Generar firma comercio
                
//                $valor_regresado= $this->genera_firma_comercio($importe,$data['numeroPedido']);
                $importe=127.00; //SACAR IMPORTE AUTOMATICO
                $codigo_comercio=4008636;
                $moneda=484;
                $t_operacion=0;
                $clave_secreta='ra40nc08h636magpersx';
                $firmasc=$importe.$data['numeroPedido'].$codigo_comercio.$moneda.$t_operacion.$clave_secreta;
                $data['firma_comercio']=sha1($firmasc);
//        FIN GENERACION FIRMA COMERCIO
                
                
                $data['title'] = 'Pago';
		$this->load->view('template/header', $data);
		$this->load->view('template/menu_usuario',$data);
		$this->load->view('pago_view',$data);
                $this->load->view('template/footer');
                
            }else{
                
                redirect('login','refresh');
                
            }
            
            
            

	}
	
	public function save_order()
	{
		$customer = array(
			'name' 		=> $this->input->post('nombre'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('direccion'),
			'phone' 	=> $this->input->post('telefono')
		);		

		$cust_id = $this->Billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->pago_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

				$cust_id = $this->pago_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		
		echo "Thank You! your order has been placed!<br />";
		echo "<a href=".base_url()."products>Go back</a>";
	}
        
}