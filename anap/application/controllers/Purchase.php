<?php 

class Purchase extends CI_Controller{


	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_inputPurchase');

    }

	 function index()
	{	
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$this->load->view('masterheader',$data);
		$this->load->view('view_inputPurchase');
		$this->load->view('masterfooter');
	}

	function insertPurchase(){


		$name 		= $this->input->post('name');
		$price		= $this->input->post('price');
		$desc 		= $this->input->post('desc');
		$time		= $this->input->post('time');
		$this->model_inputPurchase->insertPurchase($name,$price,$desc,$time);


	}


	
}

