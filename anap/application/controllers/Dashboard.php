<?php 

class Dashboard extends CI_Controller{


	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_dashboard');

    }

	 function index()
	{



		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');

			$data['StaffUsername'] = $session_data['StaffUsername'];
			$data['Count'] = $this->model_dashboard->getCountSales();
		$data['Count2'] = $this->model_dashboard->getCountProduct();
		$data['Count3'] = $this->model_dashboard->getSumSales();
		$data['Count4'] = $this->model_dashboard->getSumPurchase();
		$data['Count5'] = $this->model_dashboard->getSumExpenses();

		$this->load->view('masterheader',$data);
		$this->load->view('view_dashboard',$data);
		$this->load->view('masterfooter');

			
		} else{
			redirect('index.php/login', 'refresh');
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('index.php/login'), 'refresh');
	}	
		
	}



