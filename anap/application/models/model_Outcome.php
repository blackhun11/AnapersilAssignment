<?php 


class model_Outcome extends CI_Model{


 public function __construct()
    {
        parent::__construct();
    }

  function getOutcome(){

  	$query = $this->db->query("select itemname as Item , concat('Rp ', format( itemPrice, 0)) as Outcome,cast(PurchaseDate as date) as Date, Description from trpurchase
                               UNION
                               select expensesname, concat('Rp ', format( expensesloss, 0)), cast(expensesdate as date), Description from expenses ");
  	return $query->result_array();
  }
}

 ?>