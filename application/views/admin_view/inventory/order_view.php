<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>


<section id="basic-form-layouts">
	<div class="content-wrapper">
		<div class="row match-height">
			<div class="col-md-12">	
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-content" style="padding: 10px;">
			
										<p>
										   <?php 
											 if($this->session->flashdata("msg")){
												echo $this->session->flashdata("msg");
											 }	
											 
											
											?>
										</p>

					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="box">
							  <form class="form-horizontal" action="<?php echo base_url();?>order" role="form" method="POST" enctype="multipart/form-data">
							<!--
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label for="gross_amount" class="col-sm-12 control-label">Date: <?php //echo date('Y-m-d') ?></label>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 pull pull-right" >
										<div class="form-group">
										  <label for="gross_amount" class="col-sm-12 control-label" style="padding-left: 486px;">Time: <?php// echo date('h:i a') ?></label>
										  
										</div>
									</div>
								</div>-->

								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="row">
											<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Client Name</label>
											<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
												<div class="form-group">
													<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Client Name" autocomplete="off" />
												</div>
											</div>
										</div>
							
									</div>
 									
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="row">
											<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Client Address</label>
											<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
												<div class="form-group">
													<textarea type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter Client Address" autocomplete="off"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="row">
											<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Client Phone</label>
											<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
												<div class="form-group">
													<input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Enter Client Phone" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
								</div>
						
									<br />
									<table class="table table-bordered" id="product_info_table">
										<thead>
											<tr>
												  <th style="width:30%">Select Category</th>
												  <th style="width:30%">Product Code</th>
												  <th style="width:10%">Qty</th>
												  <th style="width:10%">Rate</th>
												  <th style="width:20%">Amount</th>
												  <th style="width:10%"><button type="button" id="add_row" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button></th>
											</tr>
										</thead>

										<tbody>
											<tr id="row_1">
											   <td>
													<select name="productid" id="category_id" class="form-control" required>
														<option value=""> Select Category</option>
														<?php foreach ($allcategory as $k => $v): 
														//pd($allcategory);
														?>
														 <option value="<?php echo $v->id; ?>"> <?php echo $v->categoryname; ?> </option>													  
														<?php endforeach ?>
													 </select>
												</td>
												
												
												<td>
													<div class="container">
														<div class="row">
															<form class="col-md-3">
																<select class="form-control select2" id="product_id" >
																	
																</select>
															</form>
															
														</div>
													</div>
												</td>
												
												<td>
													<input type="number" name="qty[]" id="quntity_id" value="1" class="form-control" required onkeyup="getTotal(1)">
												</td>
												<td>
												  <input type="text" name="rate[]" id="rate_id" class="form-control" disabled autocomplete="off">
												  <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
												</td>
												<td>
												  <input type="text" name="amount[]" id="amount_id" class="form-control" disabled autocomplete="off">
												  <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
												</td>
												<td>
													<button type="button" class="btn btn-danger btn-sm" onclick="removeRow('1')"><i class="far fa-window-close"></i></button>
												</td>
											</tr>
										</tbody>
									</table>

									<br /> 
									
									
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									
									<div class="row">
										<label for="gross_amount" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Gross Amount</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
												<input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
											</div>
										</div>
									</div>	
									
									<div class="row">
										<label for="vat_charge" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Vat %</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="vat_charge" name="vat_charge"  autocomplete="off">
												<input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
											</div>
										</div>
									</div>
									
									<div class="row">
										<label for="discount" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Discount</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
											</div>
										</div>
									</div>
									
								</div>	
									
								<div class="col-md-5 col-sm-5 col-xs-12">
				<!--2-->
									<div class="row">
										<label for="net_amount" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Net Amount</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
												<input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
											</div>
										</div>
									</div>

									<div class="row">
										<label for="due_amount" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Due Amount</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="net_amount" name="net_amount"  autocomplete="off">
												<input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
											</div>
										</div>
									</div>
									
									<div class="row">
										<label for="pay_amount" class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;">Pay Amount</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" class="form-control" id="net_amount" name="net_amount"  autocomplete="off">
												<input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
											</div>
										</div>
									</div>
									
								</div>		
							</div>		
			
							</div>
									<div class="form-actions text-center">
										<input type="hidden" name="vat_charge_rate" value="<?php //echo $company_data['vat_charge_value'] ?>" autocomplete="off">
										<button type="submit" class="btn btn-primary">Create Order</button>
										<a href="<?php// echo base_url('Controller_Orders/') ?>" class="btn btn-warning">Back</a>
									</div>
		
								
								
						</form>

						</div>

				  </div>

			
			
						</div>	
							
						</div>	
					</div>	
				</div>	
			</div>	
		</div>	
	</div>
</section>


<script>
	$(document).ready(function () {
		
				
		$("#category_id").on("change",function(){
			
			var product_cat = $(this).val();
			
			//alert(product_cat);
			// load product by category id
			 $.ajax({
				url:"<?php echo base_url();?>ajax/categorybycpoduct",
				data:{"action":"product_by_category","product_cat":product_cat},
				method:"post",
				success: function(data){
					
					//$("#unsoledlist").html(data);
					
					//console.log(data);
					
					var mydata = $.parseJSON(data);   	
						
						var select="";
						select += '<option value="">Select Product</option>';
					
						$.each(mydata, function (idx, obj) {                                   
							select += ('<option value="'+ obj.productid +'">' + obj.productid + '-' + obj.cate_name +'</option>');
						});
					

					 
					$("#product_id").html(select);
					//$("#rate_id").val(obj.sell_rate);
					
				},
				error: function(data){

				}
			});	
		});
		
		
		
		   $(document).on('change', '#product_id', function() {
				
				var product_id = $(this).val();
                 $.ajax({
					url:"<?php echo base_url();?>ajax/product_rate_by_id",
					data:{"action":"product_rate_by_id","product_id":product_id},
					method:"post",
					success: function(data){
						
						
						//console.log(data);
						var mydata = $.parseJSON(data);
						
						console.log(mydata);
						
						$("#rate_id").val(mydata[0].sell_rate);
						$("#amount_id").val(mydata[0].sell_rate);
						//$("#rate_id").val(obj.sell_rate);
						
					},
					error: function(data){

					}
				});
				
			});
			
			$(document).on('change', '#quntity_id', function() {
				
				var quantity = $(this).val();
				
			
				var value = $("#rate_id").val();
				 $("#amount_id").val(value * quantity);
				
				
			});
			
			
	
	}); // end or document ready
	</script>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    $('.select2').select2();
</script>
