	<?php 

class Notification extends CI_Controller{


  public function __construct()
    {
        parent::__construct();
        $this->load->model('model_Notification');

    }

	 function index()
	{


		$data = $this->model_Notification->getnotificationDate();
	echo json_encode($data);

	
		$this->load->view('view_notification',$data);

	}

	function url(){

	$data = $this->model_Notification->getnotificationDate();
	echo $data;


	}

}

