<?php 


class model_salesR extends CI_Model{


 public function __construct()
    {
        parent::__construct();
    }

  function getSales(){

  	$query = $this->db->query("SELECT a.SalesID,a.BuyerName as 'Customer Name', c.ProductName as 'Product' , b.VarianName as 'Varian', A.Quantity, CASE WHEN a.TakePO is null then 'On The Spot' ELSE 'Pre Order' end as 'Status',COALESCE(a.TakePO, '✘') as 'Pre-Order date', CASE WHEN a.isPaidoff = 1 THEN '✔' ELSE '✘'end as 'Paid Off' , concat('Rp ', format(   C.ProductPrice * A.Quantity, 0)) AS 'Income'  FROM trsales a JOIN msvarian b on a.VarianID = b.VarianID JOIN msproduct c on a.ProductID = c.ProductID");
  	return $query->result_array();
  }



  function deleteSales($salesID){

  	$query = $this->db->query("DELETE FROM trSales WHERE SalesID = '".$salesID."' ");
  	
  }

   function updateSales($salesID){

    $query = $this->db->query("UPDATE trSales SET isPaidoff = CASE WHEN isPaidoff = 1 then 0 else 1 end WHERE SalesID = '".$salesID."' ");
    
  }
}

 ?>