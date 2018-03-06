<div class="container">
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<span class="text-semibold">Home</span> - Make Order
					<small class="display-block">Good morning,  <?php echo $StaffUsername ?></small>

				</h4>
			</div>

			
		</div>
	</div>

		<div class="container-fluid">
		<div class="content">
          		 <?php
						foreach($product as $row)
          					 {  echo '				  
						<div class="col-md6-6 col-lg-3" style = "margin-left: 175px">
							<div class="thumbnail">
								<div class="thumb">
									<input name = "'.$row->ProductName.'" value = "'.$row->ProductID.'" 
									style = "max-width :250px ;float :center; " type="image"  src=  "'.$row->ProductImage.'" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_horizontal" onclick="getProductDetail($(this).val());"> 
          			  	</input>
									
								</div>

								<div class="caption">
									<div class="content-group-sm media">
										<div class="media-body" style = "width : 170px;">
											<h6 class="text-semibold no-margin">
												<a href="#" class="text-default"><b>'.$row->ProductName.'</b></a>
											</h6>

											
										</div>

										<h6 class="text-success media-right no-margin-bottom text-semibold">'.$row->ProductPrice.'</h6>
									</div>

									<label>'.$row->ProductDesc.'</label>
									
								</div>

								
							</div>		
				
				</div>';} ?>

		</div>
</div>					          							
	<div id="modal_form_horizontal" class="modal fade" style=" padding-top: 100px;">
						<div class="modal-dialog modal-lg">
							<div class="modal-content"  style="
    padding-left: 50px;
    padding-right: 50px;"">
								<div class="modal-header">
									<button type="button-lg" class="close" data-dismiss="modal">&times;</button>
									
						 <h5 class="modal-title" style = " font-size: 25px; "></h5>
          			 
								</div>

									<form action="#" id="formPurchase" class="form-horizontal" method="post" style=" padding-bottom: 100px; padding-top : 50px">
								
										<div class="form-group">
											<label class="control-label col-lg-2">Name : </label>
											<div class="col-lg-8">
												<input id="test_idname" type="text" class="form-control" name="name">
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
											<!-- 	<div>
											<div class="text-right" style="padding-top: 50px;">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
											</div> -->
											</div>
										</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
										<button id="test_buy" class="btn btn-primary btn-lg">Buy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /horizontal form modal -->

			</div>
			<!-- /main content -->

<script type="text/javascript">
	var global_productID;

	$(document).ready(function(){
    	$("#test_buy").click(function(e){
    		e.preventDefault();

    		$.ajax({
				url: "Makeorder/insertSales",
				method: "POST",
				data: {
					name : $('#test_idname').val(),
					varian : $('#test_varian').val() ,
					Quantity : $('#test_qty').val(),
					productID : global_productID	
				},
				success: function(data){
					alert("Purchase Success");
					 location.href = "Makeorder";
				}
			});
		});
	});

	function getProductDetail(productIDParam){
		global_productID = productIDParam;
		// $.ajax({
		// 	url: "Makeorder/insertPurchase",
		// 	method: "POST",
		// 	data: {
		// 		ProductName: productIDParam
		// 	}
		// 	// ,
		// 	// dataType: "json",
		// 	// success: function(data){
		// 	// 	var dataLength = data.length;

		// 	// 	$("#ddlItem").empty();

		// 	// 	for(var i = 0; i < dataLength; i++){
		// 	// 		$("#ddlItem").append(
		// 	// 			'<option value="' + data[i].ProductID + '">' + data[i].ProductName + '</option>'
		// 	// 		);
		// 	// 	}
		// 	// }
		// });
	}	
</script>