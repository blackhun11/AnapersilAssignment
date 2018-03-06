<?php 


class model_backend_product extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

 function insertProduct($name,$price,$upload){

        $query = $this->db->query("INSERT INTO msproduct (ProductName,ProductPrice,ProductImage)VALUES ('".$name."',".$price.",'".$upload."')");
        
    } 


}

 ?>