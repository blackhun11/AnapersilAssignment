
<script src="<?php echo base_url("assets/canvasjs.min.js") ?>"></script>


<div class="container">
<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<span class="text-semibold">Home</span> - Dashboard
					<small class="display-block">Good morning, <?php echo $StaffUsername ?></small>
				</h4>
			</div>

			
		</div>
	</div>
<style >

a.canvasjs-chart-credit {
    display: none;
}

</style>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Order Percentage",
		horizontalAlign: "left"
	},
	data: [{
		type: "pie",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
		<?php
						foreach($Count as $row)
          					 { 
          			echo '{y : '.$row->Count.', label: "'.$row->Status.'" },';

          							  } ?>

		]
	}]
});


chart.render();

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Product Percentage",
		horizontalAlign: "left"
	},
	data: [{
		type: "pie",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
		<?php
						foreach($Count2 as $row)
          					 { 
          			echo '{y : '.$row->Count.', label: "'.$row->Status.'" },';

          							  } ?>
		]
	}]
});

chart.render();

var chart = new CanvasJS.Chart("chartContainer3", {
	theme: "light1", // "light1", "ligh2", "dark1", "dark2"
	animationEnabled: true,
	title: {
		text: "Finance"
	},
	axisY: {
		title: "Amount (Rp.)",
		prefix: "Rp. ",
		lineThickness: 0,
		suffix: ",00"
	},
	data: [{
		type: "waterfall",
		indexLabel: "{y}",
		indexLabelFontColor: "#EEEEEE",
		indexLabelPlacement: "inside",
		yValueFormatString: "#,##0",
		dataPoints: [

			<?php
			foreach($Count3 as $row){ 
          			echo '{label :"Sales", y: '.$row->Sales.'},';
          			} ?>

			{ label: "Total Revenue", isIntermediateSum: true},
			<?php
			foreach($Count4 as $row){ 
          			echo '{label :"Purchasing", y: -'.$row->Purchase.'},';
          			}
          	foreach($Count5 as $row){ 
          			echo '{label :"Expenses", y: -'.$row->Expenses.'},';
          			}
          			 ?>
			{ label: "Operating Income", isCumulativeSum: true }
		
		]
	}]
});
chart.render();

}

GetClock();
setInterval(GetClock,1000);
	autoClickperSec();

</script>
</head>
<body>		

	<div class = "container" >
		<div id="chartContainer3" style="height: 370px; width: 100%; float : left"></div>
	</div>

	<br>	</br>	

	<div class = "container" >
		<div class = "col-sm-6">	
			<div id="chartContainer" style="height: 370px; width: 100%; float : left"></div>
		</div>
		<div class = "col-sm-6">
			<div id="chartContainer2" style="height: 370px; width: 100%; float : right"></div>
		</div>
	</div>

</div>