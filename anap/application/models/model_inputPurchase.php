<?php 


class model_inputPurchase extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }


    function insertPurchase($name,$price,$desc,$time){

    	$query = $this->db->query("INSERT INTO trPurchase (itemName,itemPrice,Description,PurchaseDate)VALUES ('".$name."',".$price.",'".$desc."','".$time."')");
    	
    } 
}
 ?>