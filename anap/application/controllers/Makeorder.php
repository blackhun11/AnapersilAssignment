	<?php 

class Makeorder extends CI_Controller{


  public function __construct()
    {
        parent::__construct();
        $this->load->model('model_makeorder');

    }

	 function index()
	{
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$data['product'] = $this->model_makeorder->getProduct();
		$data['varian'] = $this->model_makeorder->getVarian();
		$this->load->view('masterheader',$data);
		$this->load->view('view_makeorder',$data);
		$this->load->view('masterfooter');
	}

	function getProductIDValue(){

		$value = $this->input->post('productID');
		$returnValue = $this->model_makeorder->getProductByID($value);
		echo json_encode($returnValue);
	}

	function insertSales(){

		$name 		= $this->input->post('name');
		$varianID 	= $this->input->post('varian');
		$Quantity 	= $this->input->post('Quantity');
		$productID 	= $this->input->post('productID');	
		
		$this->model_makeorder->insertSales($name, $varianID, $Quantity, $productID);
		// $this->index();
	}

	function getProductName(){

		$value = $this->input->post('productID');
		$returnValue = $this->model_makeorder->getProductName($productID);
		echo json_encode($returnValue);
	}

}

