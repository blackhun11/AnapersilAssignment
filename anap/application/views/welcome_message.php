<!DOCTYPE html>
<html lang="en">
<style>
*{
margin: 0px;
padding: 0px;
border: 0px;
}

</style>
<head>


		<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="assets\bootstrap-3.3.7/dist/js/jquery-1.11.3.min.js"></script>
  <script src="assets\bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
   </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-default">
     <div class="navbar-header" >
      <a class="navbar-brand" href="index.html" ><img src="Pic/wave2.png" width="75px" style="margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);"></a></div>
  </nav>
<style>
	h1{
		font-style: italic;
		font-weight: bolder;
		
	}
	h4{
		color: #7F7F7F
	}
	#line {
		height: 5px;
		width: 100%;
		background-color: #CD1616;
	}
	#foto{
		animation-name: fade;animation-duration: 1s;
	}
	@keyframes fade{
		0%   {opacity:  0;}
    	100% {opacity:1;}
	}
	h2{
		color: #CD1616;
		font-weight: bolder;
	}
</style>
<div class="row">
<div class="col-sm-6">
</div>
<div class="col-sm-6">

<form style="width: 100%; margin: auto" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <div>
  <button type="submit" class="btn btn-default" style="background-color: #CD1616;color: #ffffff;" >Sign up</button>

  </div>
</form> 
</div>
</div>
</div>
<footer>

  <div class="container-fluid" style="background-color: #F8F8F8; outline:auto ; outline-color:#E7E7E7 ;padding:100px;margin-top: 100px">

</div>
</footer>
</body>
</html>