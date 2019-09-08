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
								<form class="form-horizontal" action="<?php echo base_url();?>product" role="form" method="POST" enctype="multipart/form-data">
								
			
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Product Code:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
														<input type="text" name="product_code" class="form-control" value="<?php
																//echo(rand() . "<br>");
																//echo(rand() . "<br>");
																echo(rand(10,10000));
																?>"   required>
														
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Invoice No</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="memono" class="form-control" value="" placeholder="Invoice No" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Product Name:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="product" class="form-control" value="" placeholder="Product Name" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Vendor Name:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<select class="form-control" name="vendor"  required>
																<option value=""> Select Vendor </option>
																<?php if($allvendor){
																		foreach($allvendor as $data){
																?>
																		<option value="<?php echo $data->vendor_id;?>"> <?php echo $data->vendorname;?> </option>
																
																<?php }
																	}
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Item Name:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<select class="form-control" name="item"  required>
																<option value=""> Select Item </option>
																<?php if($allitem){
																		foreach($allitem as $data){
																?>
																		<option value="<?php echo $data->id;?>"> <?php echo $data->itemname;?> </option>
																
																<?php }
																	}
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											
											
											
											
											
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Category Name:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<select class="form-control" name="category"  required>
																<option value=""> Select Category </option>
																<?php if($allcategory){
																
																		foreach($allcategory as $data){
																?>
																		<option value="<?php echo $data->id;?>"> <?php echo $data->categoryname;?> </option>
																
																<?php }
																	}
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											
			
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Product Quantity </label>	
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="product_qty" class="form-control" value="" placeholder="Quantity" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											
											
										
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Buy price</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="purchase_price" class="form-control" value="" placeholder="Per pic" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Sell price</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="sell_price" class="form-control" value="" placeholder="Per piece" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Vendor Payment:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="payment" class="form-control" value=""placeholder="Payment by Vendor" autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Payment Mode</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<select name="payment_mode" class="form-control"  required>
																<option value="0">Cash</option>
																<option value="1">Check</option>
																<option value="2">Online</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Payment Note</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<input type="text" name="payment_note" class="form-control" value="" placeholder="Cash/Check NO/Bkash No " autocomplete="off" required>
														</div>
													</div>
												</div>
											</div>
											
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="row">
													<label class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-4 text-right" style="padding: 10px;">Warehouse:</label>
													<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
														<div class="form-group">
															<select class="form-control" name="warehousename" required>
																<option value=""> Select Category </option>
																<?php if($warehousename){
																		foreach($warehousename as $data){
																			
																?>
																		<option value="<?php echo $data->id;?>"> <?php echo $data->warehouse_name;?> </option>
																
																<?php }
																	}
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											
							</hr>
	
									</div>
								
										<div class="form-actions text-center">
											<input type="submit" value="Save" class="btn btn-primary">
										</div>
								
	
										 

								
								
							<div class="table-responsive">
								<table id= "mydatatable" class="table table-striped table-bordered zero-configuration" >
									<thead  style="background: #58ACFA; color: white;font-size: 14px;">
										<tr>
										
											<th>Vendor </th>
											<th>P-Code</th>
											<th>Invoice</th>
				                            <th>Name</th>
				                            <th>Item</th>
				                            <th>Category</th>
				                            <th>Quantity</th>
				                            <th>Total-Buy</th>
				                            <th>Pay</th>
				                            <th>Buy Price</th>
				                            <th>Sell Price</th>
				                            <th>Date</th>
				                            <th>Print</th>
				                            
				                        </tr>
				                    </thead>
									
							
									
				                    <tbody>
										<?php 
											if($arr){
											
													//pd($arr);
												
												foreach($arr as $data)
															 
												{
												?>	
				                        <tr>

											<td><?php echo $this->model_inventory->vendornameid($data->vendorid);?></td>
											<td><?php echo $data->product_code;?></td>
											<td><?php echo $data->memo_no;?></td>
				                            <td><?php echo $data->productname;?></td>
											<td><?php echo $this->model_inventory->itemnamebyid($data->itemid);?></td>
											<td><?php echo $this->model_inventory->categorynamebyid($data->categoryid);?></td>
											<td><?php echo $data->product_qty;?></td>
											<td><?php echo $data->total_pursess;?></td>
											<td><?php echo $data->payment;?></td>
											<td><?php echo $data->purchase_price;?></td>
											<td><?php echo $data->sell_price;?></td>
											<td><?php echo $data->date;?></td>
											<td><a href="<?php  echo base_url();?>inventory/edituser/<?php  echo $data->id;?>" class="btn btn-warning">Print</a></td>
				
				                        </tr>
											 <?php }
												}
											?>   
				                    </tbody>
				                </table>
			                </div>
					</form>		
						</div>	
							
						</div>	
					</div>	
				</div>	
			</div>	
		</div>	
	</div>
</section>			
