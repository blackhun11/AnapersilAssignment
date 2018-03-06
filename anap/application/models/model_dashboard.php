<?php 


class model_dashboard extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    function getCountSales(){

        $query = $this->db->query("select CASE WHEN TakePO is null then 'On The Spot' ELSE 'Pre Order' end as Status, count(CASE WHEN TakePO is null then 'On The Spot' ELSE 'Pre Order' end) as Count from trsales group by Status");
            return $query->result();
}

	function getCountProduct(){

		$query = $this->db->query("SELECT concat(ProductName,' - ',VarianName) AS Status , COUNT(A.ProductID) AS Count FROM trsales a join msproduct b on a.ProductID = b.ProductID join msvarian c on a.VarianID = c.VarianID GROUP BY B.ProductName,C.VarianName");
			return $query->result();
	}


	function getSumSales(){

		$query = $this->db->query("SELECT sum(C.ProductPrice * A.Quantity) AS 'Sales'  FROM trsales a  JOIN msproduct c on a.ProductID = c.ProductID where a.ispaidoff = 1");
		return $query->result();

	}

	function getSumPurchase(){

		$query = $this->db->query("SELECT sum(itemPrice) as Purchase from trpurchase");
		return $query->result();
	}

	function getSumExpenses(){

		$query = $this->db->query("SELECT sum(expensesLoss) as Expenses from expenses");
		return $query->result();
	}

}



 ?>