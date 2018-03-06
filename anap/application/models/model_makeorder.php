<?php 


class model_makeorder extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $query = $this->db->query("SELECT ProductID,ProductName,concat('Rp ', format( ProductPrice, 0)) as ProductPrice,ProductImage, ProductDesc FROM msProduct");
        return $query->result();
    }

    function getProductByID($productID)
    {
        $query = $this->db->query("SELECT ProductID,ProductName FROM msProduct WHERE ProductID = '" . $productID . "'");
        return $query->result();
    }

    function getVarian(){

    	$query = $this->db->query("SELECT VarianID,VariaNname FROM msVarian");
    	return $query->result();
    }

    function insertSales($name, $varianID, $Quantity, $productID){
    	$query = $this->db->query("INSERT INTO trSales (ProductID,VarianID,Quantity,BuyerName,isPaidoff)VALUES (".$productID.",".$varianID.",".$Quantity.",'".$name."',1)");
        
    	// return $query->result();
    }

}

 ?>