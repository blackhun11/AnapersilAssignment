<?php 

class Outcome extends CI_Controller{

public function __construct()
    {
        parent::__construct();
        $this->load->model('model_Outcome');

    }


	 function index()

	{	
		$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
		$data = $this->model_Outcome->getOutcome();
		$this->load->view('masterheader',$session_data);
		$this->load->view('view_Outcome',array('data'=>$data));
		$this->load->view('masterfooter');
	}

	

}

