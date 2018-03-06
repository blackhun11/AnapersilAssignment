<?php 


class model_PO extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $query = $this->db->query("SELECT ProductID,ProductName,ProductPrice FROM msProduct");
        return $query->result();
    }

    function getVarian(){

    	$query = $this->db->query("SELECT VarianID,VariaNname FROM msVarian");
    	return $query->result();
    }

   function insertSales($name, $time, $varianID, $Quantity, $productID){
        $query = $this->db->query("INSERT INTO trSales (ProductID,VarianID,Quantity,BuyerName,TakePO,isPaidoff)VALUES (".$productID.",".$varianID.",".$Quantity.",'".$name."','".$time."',0)");
    	   
    }

}

 ?>