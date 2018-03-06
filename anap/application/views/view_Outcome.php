
<style >
select {
	margin-top: 9px;
}
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

							
						<!-- <button type="submit" id="cmd" style = "margin-left: 10px;" class="btn btn-primary"> .pdf </button> -->
						<table id="tblProduct" class="datatable table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Item</th>
									<th>Outcome</th>
									<th>Date</th>
									<th>Description</th>	
								</tr>
							</thead>
							<tbody>
								<?php foreach($data as $d){ ?>
								<tr> 
									<td><?php echo $d['Item'] ?></td>
									<td><?php echo $d['Outcome'] ?></td>
									<td><?php echo $d['Date'] ?></td>
									<td><?php echo $d['Description'] ?></td>
									<td style="display: none;"></td>
									<td style="display: none;"></td>
								</tr>
								<?php } ?>
							</tbody>			
						</table>


					<div id ="content"m style=" display :none">
						<div id = "table_wrapper">
							<table border="1" cellspacing="0" bordercolor="#222"  >
								<thead>
									<tr>
										<th>Item</th>
										<th>Outcome</th>
										<th>Date</th>
										<th>Description</th>	
									</tr>
								</thead>
								<tbody>
									<?php foreach($data as $d){ ?>
									<tr> 
										<td><?php echo $d['Item'] ?></td>
										<td><?php echo $d['Outcome'] ?></td>
										<td><?php echo $d['Date'] ?></td>
										<td><?php echo $d['Description'] ?></td>
				
									</tr>
									<?php } ?>
								</tbody>			
							</table>
						</div>
					</div>

					</div>
				</div>
			</section>
</div>


	<script type="text/javascript">
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
					alert('sukses');
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
					alert('sukses');
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
    a.download = 'OutcomeReport' + Date() + '.xls';
    a.click();
  });


var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   

    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
	});


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>


			
		
					<!-- /scrollable datatable -->