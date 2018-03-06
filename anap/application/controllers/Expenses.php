<?php 

class Expenses extends CI_Controller{


	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_inputExpenses');

    }

	 function index()
	{	
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$this->load->view('masterheader',$data);
		$this->load->view('view_inputExpenses');
		$this->load->view('masterfooter');
	}

	function insertExpenses(){


		$name 		= $this->input->post('name');
		$expenses	= $this->input->post('expenses');
		$desc 		= $this->input->post('desc');
		$time		= $this->input->post('time');
		$this->model_inputExpenses->insertExpenses($name,$expenses,$desc,$time);


	}


	
}

