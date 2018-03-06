
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salt & Egg</title>

	<!-- Global stylesheets -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/icons/icomoon/styles.css"); ?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/bootstrap.css"); ?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/core.css" ); ?>rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/components.css"); ?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/colors.css"); ?> rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->

	<!-- Core JS files -->

	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/loaders/pace.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/libraries/jquery.min.js"); ?>></script>
	

	<script src="<?php echo base_url("assets\js\plugins\jquery-3.2.1.min.js"); ?>"></script>	
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/libraries/bootstrap.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/loaders/blockui.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/ui/nicescroll.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/ui/drilldown.js"); ?>></script>


	<!-- Theme JS files -->
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/visualization/d3/d3.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/visualization/d3/d3_tooltip.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/forms/styling/switchery.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/forms/styling/uniform.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/forms/selects/bootstrap_multiselect.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/ui/moment/moment.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/daterangepicker.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/app.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/pages/dashboard.js"); ?>></script>
	<!-- /theme JS files -->

	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/notifications/jgrowl.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/ui/moment/moment.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/daterangepicker.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/anytime.min.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.date.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.time.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/pickers/pickadate/legacy.js"); ?>></script>

	<script type="text/javascript" src=<?php echo base_url("assets/js/core/app.js"); ?>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/pages/picker_date.js"); ?>></script>

	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/tables/datatables/datatables.min.js"); ?>>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/forms/selects/select2.min.js"); ?>>></script>

	<script type="text/javascript" src=<?php echo base_url("assets/js/core/app.js"); ?>>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/pages/datatables_basic.js"); ?>>></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/uploaders/fileinput.min.js");?>></script>


	<script type="text/javascript" src=<?php echo base_url("assets/js/pages/uploader_bootstrap.js");?>></script>
	

</head>



<header>

		<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard"><img src=<?php echo base_url("assets/Logo.png"); ?> style = "max-width: 32px;" ></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			

			<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
			
						

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown" style = "cursor: pointer;">
						
						<span><?php echo $StaffUsername ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="<?php echo site_url('index.php/Dashboard/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li ><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li ><a href="dashboard"><i class="icon-display4 position-left"></i> Dashboard</a></li>

				

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-strategy position-left"></i> Transaction <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-200">
						
						<li class="dropdown-header">Sales</li>
						<li><a href="MakeOrder"><i class="icon-align-center-horizontal"></i> Make Order</a></li>
						<li><a href="PreOrder"><i class="icon-flip-vertical3"></i>Pre - Order</a></li>
						<li class="dropdown-header">Purchase</li>
						<li><a href="Purchase"><i class="icon-flip-vertical3"></i>Input Purchase</a></li>
						<li><a href="Expenses"><i class="icon-flip-vertical3"></i>Input Expenses</a></li>
					</ul>
				</li>


				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Backend <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">
						<li class="dropdown-header">Report</li>

						<li class="dropdown-submenu">
							<a href="salesreport"><i class="icon-images3"></i> Sales Report</a>
						</li>

						<li class="dropdown-submenu">
							<a href="Outcome"><i class="icon-task"></i> Outcome Report</a>
						</li>

				
						<li class="dropdown-header">Backend Management</li>
						<li class="dropdown-submenu">
					<!-- 		<a href="Backendmanagementstaff"><i class="icon-cash3"></i> Staff</a>
						</li>

						<li class="dropdown-submenu">
							<a href="#"><i class="icon-user-plus"></i> Product</a>
						</li> -->		
					</ul>
				</li>
				<li>
				<li style="margin-left: 499px; font-size: 15px;"><a>Server Time : </a></li>
				<li style="font-size: 15px; font: georgia;"><a id="clockbox" ></a></li></li>

			</ul>

			
		</div>
	</div>

</header>

	<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function autoClick(){
if(! ('Notification' in window) ){
				alert('Sorry bro, your browser is not good enough to display notification');
				return;
			}	

  $.get("Notification/url", function(data){
  				var n = data;
    			console.log(n);
			if (n==300)
			{
			Notification.requestPermission(function(permission){
				var notification = new Notification("Reminder!!!",{body:'Please check your Pre-Order transaction..',icon:'http://localhost:8080/anap/assets/logo.png',dir:'auto'});
			});
		}else{
		
		}


        });
}
function autoClickperSec (){
	setInterval(autoClick,1000);
}



function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
autoClickperSec();
}
</script>
