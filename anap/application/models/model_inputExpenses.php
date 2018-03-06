<?php 


class model_inputExpenses extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }


    function insertExpenses($name,$expenses,$desc,$time){

    	$query = $this->db->query("INSERT INTO expenses (expensesName,expensesLoss,Description,expensesDate)VALUES ('".$name."',".$expenses.",'".$desc."','".$time."')");
    	
    } 
}
 ?>