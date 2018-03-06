


<div class="container">	
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<span class="text-semibold">Home</span> - Input expenses
					<small class="display-block">Good morning, <?php echo $StaffUsername ?></small>
				</h4>
			</div>
		</div>
	</div>

								<div class = "col-md-1">

								</div>
								<div class ="col-md-9">	
										<div class = "panel panel-flat">
											<div class = "panel-heading">
												
											<div class = "panel-body">
									<form action="#" class="form-horizontal" method="post">
										<div class="form-group">
											<label class="control-label col-lg-2">Item Name : </label>
											<div class="col-lg-8">
												<input id="txtName" type="text" class="form-control" name="name">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Spending : </label>
											<div class="col-lg-8">
												<input id="txtExpenses" type="number" class="form-control" step = "1000" name = "price">
											</div>
										</div>


										<div class="form-group">		
										<label class="control-label col-lg-2">Date Input : </label>
										
									<div class="col-lg-8">
											<input type="text" class="form-control" id="ButtonCreationDemoInput" placeholder="Select a date" name = "time">
									</div>
										<div class="input-group">
											<div class="col-lg-8">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btn-icon" id="ButtonCreationDemoButton"><i class="icon-calendar3"></i></button>
												</span>
											</div>
										</div>
									</div>
												                      
										<div class="form-group">
											<label class="control-label col-lg-2">Description : </label>
											<div class="col-lg-8">
												<textarea id="txtDesc" type="textarea" class="form-control" rows = "10" name = "desc">
														</textarea>


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



<script type="text/javascript">
	

	$(document).ready(function(){
    	$("#btnRecord").click(function(e){
    		e.preventDefault();
    			
    						
    		$.ajax({
				url: "Expenses/insertExpenses",
				method: "POST",
				data: {
					name : $('#txtName').val(),
					expenses : $('#txtExpenses').val(),
					desc : $('#txtDesc').val(),
					time : $('#ButtonCreationDemoInput').val() 
				},		


				success: function(data){
					alert('Success');
					location.href = "Expenses";
				}
			});
		});
	});
	
</script>