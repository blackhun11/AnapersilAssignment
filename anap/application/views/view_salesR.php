	<!-- Page header -->
	
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="/cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script> -->

<style >

select {margin-top: 9px;}

</style>
<div class="container">
	<section>	
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					
					<span class="text-semibold">Home</span> - Sales Report
					<small class="display-block">Good morning, <?php echo $StaffUsername ?></small>
				</h4>
			</div>

			
		</div>
	</div>
	<!-- /page header -->
				<!-- Scrollable datatable -->
			
				<div class = "col-md-1">
				</div>
				<div class = "col-md-10">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<button type="submit" id="btnExport" style = "margin-left: 10px;" class="btn btn-primary"> .xls </button>
						</div>
						<!-- <button type="submit" id="btnExport" style = "margin-left: 10px;" class="btn btn-primary"> .xls </button> -->
					<!-- <div id ="table_wrapper"> -->
						<table id="tblProduct" class="datatable table-striped table-bordered" cellspacing="0" width="100%" border="1" cellspacing="0" bordercolor="#222" >
							<thead>
								<tr>
									<th>Customer Name</th>
									<th>Product</th>
									<th>Varian</th>
									<th>Quantity</th>
									<th>Status</th>
									<th>Pre-Order Date</th>
									<th>Paid-Off</th>
									<!-- <th>Price Promo</th> -->
									<th>Income</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data as $d){ ?>
								<tr> 
									<td><?php echo $d['Customer Name']; ?></td>
									<td><?php echo $d['Product']; ?></td>
									<td><?php echo $d['Varian']; ?></td>
									<td><?php echo $d['Quantity']; ?></td>
									<td><?php echo $d['Status']; ?></td>
									<td><?php echo $d['Pre-Order date']; ?></td>
									<td><?php echo $d['Paid Off']; ?></td>
									<!-- <td><?php echo $d['Price Promo']; ?></td> -->
									<td><?php echo $d['Income']; ?></td>
									<td class="text-center">
										<button id ="btnEdit" class = "icon-pencil4" value = "<?php echo $d['SalesID']; ?>"></button>
										<button  id ="btnDelete"    class = "icon-cancel-square2" 
										value = "<?php echo $d['SalesID']; ?>" ></button>
									</td>
								</tr>
								<?php } ?>
							</tbody>			
						</table>

						<div id = "table_wrapper" style=" display :none">
						<table border="1" cellspacing="0" bordercolor="#222"  >
							<thead>
								<tr>
									<th>Customer Name</th>
									<th>Product</th>
									<th>Varian</th>
									<th>Quantity</th>
									<th>Status</th>
									<th>Pre-Order Date</th>
									<th>Paid-Off</th>
									<th>Price Promo</th>
									<th>Income</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data as $d){ ?>
								<tr> 
									<td><?php echo $d['Customer Name']; ?></td>
									<td><?php echo $d['Product']; ?></td>
									<td><?php echo $d['Varian']; ?></td>
									<td><?php echo $d['Quantity']; ?></td>
									<td><?php echo $d['Status']; ?></td>
									<td><?php echo $d['Pre-Order date']; ?></td>
									<td><?php echo $d['Paid Off']; ?></td>
									<td><?php echo $d['Price Promo']; ?></td>
									<td><?php echo $d['Income']; ?></td>
								</tr>
								<?php } ?>
							</tbody>			
						</table>
						</div>
						<!-- </div> -->
					</div>
				</div>
			</section>
	</div>		
				
			<script type="text/javascript">
				
		function rebindSalesData(){
			$.ajax({
				url: "SalesReport/getSalesReportData",
				cache : false,
				method: "POST",
				success: function(dataSource){
					console.log(dataSource)
					$("#tblProduct").DataTable().clear();
					$("#tblProduct").DataTable().rows.add(dataSource);
					$("#tblProduct").DataTable().draw();
				}
			});
		}

	$(document).ready(function(){
			
    	$(".icon-cancel-square2").click(function(e){
    		e.preventDefault(); 		
    		$.ajax({
				url: "SalesReport/deleteSales",
				cache : false,
				method: "POST",
				data: {
					SalesID  : $(this).val()
				},
				success: function(data){
					alert('Success');
					location.href = "SalesReport";

				
				}
			});
		});

		$(".icon-pencil4").click(function(e){
    		alert($(this).val());
    		e.preventDefault(); 		
    		$.ajax({
				url: "SalesReport/updateSales",
				cache : false,
				method: "POST",
				data: {
					SalesID  : $(this).val()
				},
				success: function(data){
					alert('Success');
					 location.href = "SalesReport";
					

				}
			});
		});

		$("#tblProduct").dataTable();

	

$("#btnExport").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html; 
    a.download = 'SalesReport' + Date() + '.xls'; 
    a.click();
  });
	});
</script>
			

					<!-- /scrollable datatable -->