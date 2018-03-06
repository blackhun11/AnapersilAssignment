<?php 

class SalesReport extends CI_Controller{

public function __construct()
    {
        parent::__construct();
        $this->load->model('model_salesR');

    }


	 function index()
	{
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$data = $this->model_salesR->getSales();
		$this->load->view('masterheader',$session_data);
		$this->load->view('view_salesR',array('data'=>$data));
		$this->load->view('masterfooter');
	}

	function deleteSales(){

		$salesID = $this->input->post('SalesID');
		$this->model_salesR->deleteSales($salesID);
	}	

		function updateSales(){

		$salesID = $this->input->post('SalesID');
		$this->model_salesR->updateSales($salesID);
		
	}

	function getSalesReportData(){
		$data = $this->model_salesR->getSales();

		echo json_encode($data);
	}	

}

