<?php 


class model_Notification extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

  function getnotificationDate(){

  	$query = $this->db->query("SELECT timestampdiff(second,now(),TakePO) as 'diff' FROM trSales where TakePO IS NOT NULL
and timestampdiff(second,now(),TakePO) >299
group by SalesID,TakePO
order by diff");
  	  $result = $query->row();


  	  if($query->num_rows()>0){
			return $result->diff;
		} else{
			return 0;
		}
  	
  }

}



 ?>