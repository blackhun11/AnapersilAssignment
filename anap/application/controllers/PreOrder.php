<?php 

class PreOrder extends CI_Controller{


  public function __construct()
    {
        parent::__construct();
        $this->load->model('model_PO');

    }

	 function index()
	{
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$data['product'] = $this->model_PO->getProduct();
		$data['varian'] = $this->model_PO->getVarian();
		$this->load->view('masterheader',$data);
		$this->load->view('view_PO',$data);
		$this->load->view('masterfooter');


	}


	function insertSales(){
		$name 		= $this->input->post('name');
		$time		= $this->input->post('time');
		$varianID 	= $this->input->post('varian');
		$Quantity 	= $this->input->post('Quantity');
		$productID 	= $this->input->post('productID');	
		$this->model_PO->insertSales($name,$time, $varianID, $Quantity, $productID);

		// $this->index();
		
	}


}
