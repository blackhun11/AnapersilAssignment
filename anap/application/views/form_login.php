<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"  type="text/css">
	<link href=<?php echo base_url("assets/css/icons/icomoon/styles.css"); ?> rel="stylesheet" type="text/css">
		
	<link href=<?php echo base_url("assets/css/bootstrap.css"); ?>  rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/core.css"); ?>  rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/components.css"); ?>  rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("assets/css/colors.css"); ?>  rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/loaders/pace.min.js"); ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/libraries/jquery.min.js"); ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/libraries/bootstrap.min.js"); ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/plugins/loaders/blockui.min.js"); ?> ></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src=<?php echo base_url("assets/js/core/app.js"); ?> ></script>
</head>



<body class="login-container">
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="login"><img src="assets/Logo.png" style="
    width: 50px;
    height: 50px;
" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

	<!-- /main navbar -->

	<!-- Page container -->
	<div class= "page-container">
<div class="container"  >

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body login-form">
            	<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('/index.php/login','class="myclass"');
              ?>

                <div class="form-group">
                  <?php
                  
                    echo '<div class="form-group has-feedback has-feedback-left">';
                    echo form_input('username','','class="form-control" id="username" placeholder="UserName"');

                    echo '<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>';
                  ?>

                </div>

                <div class="form-group">
                  <?php
                    
                    echo '	<div class="form-group has-feedback has-feedback-left">';
                    echo form_password('password','','class="form-control" id="password" placeholder="Password"');
                    echo '<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>';
                  ?>
                </div>
                <br></br>
                <?php echo form_submit('login', 'Login', 'class="btn btn-primary btn-block"');
                
                 ?>
					              
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
     </div>
    </div>

</body>
</html>

