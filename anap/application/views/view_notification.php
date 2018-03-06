<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<head>
	
</head>

<body >


<!-- 
	 <?php
						foreach($date as $row)
          					 { echo '<label id = "demo"  diff = "'.$row->diff.'" class = "dummy" > '.$row->diff.' </label>'

          					 	;} ?>
 -->


</body>
</html>


	<script>

  

function autoClick(){
if(! ('Notification' in window) ){
				alert('Sorry bro, your browser is not good enough to display notification');
				return;
			}	

  $.get("Notification/url", function(data){
  				var n = data;
    			alert(n);
			if (n==3600)
			{
			Notification.requestPermission(function(permission){
				var notification = new Notification("Reminder!",{body:'Please check your Pre-Order transaction..',icon:'https://cdn2.iconfinder.com/data/icons/ios-7-style-metro-ui-icons/512/MetroUI_HTML5.png',dir:'auto'});
			});
		}else{
		
		}


        });
}
function autoClickperSec (){
	setInterval(autoClick,1000);
}
	window.onload = function(){
	autoClickperSec();
	}
	</script>