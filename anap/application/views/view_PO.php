<div class="container">	
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<span class="text-semibold">Home</span> - Pre Order
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
											<label class="control-label col-lg-2">Name : </label>
											<div class="col-lg-8">
												<input id="test_idname" type="text" class="form-control" name="name">
											</div>
										</div>
									<div class="form-group">		
										<label class="control-label col-lg-2">DatePick : </label>
										
											<div class="col-lg-8">
											<input type="text" class="form-control" id="ButtonCreationDemoInput" placeholder="Select a date" name = "time">
										</div><div class="input-group"><div class="col-lg-8">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default btn-icon" id="ButtonCreationDemoButton"><i class="icon-calendar3"></i></button>
											</span></div>
										</div>
										
									</div>
										<div class="form-group">
				                        	<label class="control-label col-lg-2">Item : </label>
				                        	<div class="col-lg-8">
					                            <select  id="test_product" class="form-control" name = "product">
					                                   <?php
          										  foreach($product as $row)
          										 { 
          								  			echo '<option value="'.$row->ProductID.'">'.$row->ProductName.'</option>';
          							  			} ?>
					                            </select>
				                            </div>
				                        </div>

				                        <div class="form-group">
				                        	<label class="control-label col-lg-2">Varian : </label>
				                        	<div class="col-lg-8">
					                            <select  id="test_varian" class="form-control" name = "varian">
					                                   <?php
          										  foreach($varian as $row)
          										 { 
          								  			echo '<option value="'.$row->VarianID.'">'.$row->VariaNname.'</option>';
          							  			} ?>
					                            </select>
				                            </div>
				                        </div>

										<div class="form-group">
											<label class="control-label col-lg-2">Quantity : </label>
											<div class="col-lg-8">
												<input id="test_qty" type="number" class="form-control" name = "Quantity">



												<div>
											<div class="text-right" style="padding-top: 10px;">
											<button type="submit" id="test_buy" class="btn btn-primary">Order <i class="icon-arrow-right14 position-right"></i></button>
										</div>
											</div>
											</div>
										</div>
								</form>
							</div></div>
							</div>
						
					</div>
		

			</div>
<script type="text/javascript">
	var global_productID;

	$(document).ready(function(){
    	$("#test_buy").click(function(){

    		$.ajax({
				url: "PreOrder/insertSales",
				method: "POST",
				data: {
					name : $('#test_idname').val(),
					time : $('#ButtonCreationDemoInput').val(),
					varian : $('#test_varian').val() ,
					Quantity : $('#test_qty').val(),
					productID : $('#test_product').val()

				},		

				success: function(data){
					alert('Success');
				}
			});
		});
	});

	
</script>