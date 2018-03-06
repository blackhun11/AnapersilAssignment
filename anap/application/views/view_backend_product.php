


<div class = "container">	
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<span class="text-semibold">Home</span> - Backend - Input Product
					<small class="display-block">Good morning, <?php echo $StaffUsername ?></small>
				</h4>
			</div>

			
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->


		<div class="page-content">

								<div class = "col-md-1">

								</div>
								<div class ="col-md-9">	
										<div class = "panel panel-flat">
											<div class = "panel-heading">
												
											<div class = "panel-body">
									<form action="#" class="form-horizontal" method="post">
										
										<div class="form-group">
											<label class="control-label col-lg-2">Product Name : </label>
											<div class="col-lg-8">
												<input id="txtName" type="text" class="form-control" name="name">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Price : </label>
											<div class="col-lg-8">
												<input id="txtPrice" type="number" class="form-control" step = "1000" name = "price">
											</div>
										</div>

										<div class="form-group">
									<label class="col-lg-2 control-label text-semibold">Product Image : </label>
									<div class="col-lg-8">
										<input type="file" name = "userfile" class="file-input" id = "txtUploader" >
										<span class="help-block" style="color : #ff0707;">*upload your product image here</span>
													<div>
											<div class="text-right" style="padding-top: 10px;">
											<button type="submit" id="btnRecord" class="btn btn-primary">Record <i class="icon-arrow-right14 position-right"></i></button>
											</div>

								</div>
									</div>
									
								</div>
					
								</form>
							</div></div>
							</div>
						
					</div>
		

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	
	<!-- /footer -->


</div>

<script type="text/javascript">
	

	$(document).ready(function(){
    	$("#btnRecord").click(function(e){
    		e.preventDefault();
    			alert('keklik');
    						
    		$.ajax({
				url: "BackendProduct/insertProduct",
				method: "POST",
				data: {
					name : $('#txtName').val(),
					price : $('#txtPrice').val(),
					 // upload : $('#txtUploader').val()

				},		


				success: function(data){
					alert('sukses');
				}
			});
		});
	});
	
</script>

</html>