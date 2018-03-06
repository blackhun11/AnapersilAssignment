<?php 

class BackendProduct extends CI_Controller{


	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_backend_product');

    }

	 function index()
	{	$session_data = $this->session->userdata('logged_in');
		$data['StaffUsername'] = $session_data['StaffUsername'];
		
		$this->load->view('masterheader',$data);
		$this->load->view('view_backend_product');
		$this->load->view('masterfooter');
	}

	function insertProduct2()
	{

		$name 		= $this->input->post('name');
		$price		= $this->input->post('price');
		$upload 	= $this->input->post('upload');

		$this->model_backend_product->insertProduct($name,$price,$upload);


	}


	function insertProduct(){
			$name 		= $this->input->post('name');
		$price		= $this->input->post('price');
 	$config['upload_path'] = '/file_path/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')){
        // If the upload fails
        echo $this->upload->display_errors('<p>', '</p>');
    }else{
        // Pass the full path and post data to the set_newstudent model
        $this->student_model->insertProduct($this->upload->data('full_path'),$this->input->post(),$name,$price);
    
	}
		
}

}