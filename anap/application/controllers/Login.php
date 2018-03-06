<?php


class Login extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();
        $this->load->model('model_Login');
    }   


	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
		if($this->form_validation->run()==false){
			$this->load->view('form_login');
		} else{
			redirect(base_url('index.php/dashboard'), 'refresh');
		}
	}

	function basisdata_cek($password){
		$username = $this->input->post('username');
		$result = $this->model_Login->login($username,$password);

		if($result){
			$sess_array = array();

			foreach ($result as $row) {
				$sess_array = $arrayName = array('StaffUsername' => $row->StaffUsername);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else{
			$this->form_validation->set_message('basisdata_cek', 'Invalid username or password (Nama pengguna dan kata sandi salah)');
			return false;
		}
	}

	

	


}
