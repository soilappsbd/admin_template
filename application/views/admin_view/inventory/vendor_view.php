<section id="basic-form-layouts">
	<div class="content-wrapper">
		<div class="row match-height">
			<div class="col-12">	
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-content" style="padding: 10px;">	
			
							<button class="btn btn-primary"  data-toggle="modal" data-target="#addvendor"> Add Vendor </button>
							

								<br/>
										<p>
										   <?php 
											 if($this->session->flashdata("msg")){
												echo $this->session->flashdata("msg");
											 }	
											 
											
											?>
										</p>
										<div class="table-responsive">
												<table id= "mydatatable" class="table table-striped table-bordered zero-configuration" >
													<thead  style="background: #58ACFA; color: white;">
														<tr>
															<th>SL</th>
															<th>VendorID</th>
															<th>V-Name</th> 
															<th>Address</th> 
															<th>Mobile</th> 
															<th>Total Buy</th> 
															<th>Pay-Amount</th> 
															<th>Last Due</th> 
															<th>Advance</th> 
															<th>Accounts</th> 
															<th>Status</th> 
															<th>Payment</th> 

														</tr>
													</thead>
													<tbody>
														
														<?php 
															if($arr){
															
																//	pd($arr);
																
																foreach($arr as $data)
																			 
																{
																?>		
														<tr>
															<td><?php  echo $data->id;?></td>
															<td><?php  echo $data->vendor_id;?></td>
															<td><?php  echo $data->vendorname;?></td>
															<td><?php  echo $data->vendor_address;?></td>
															<td><?php  echo $data->vendor_mobile;?></td>
															
															<td><?php  echo $data->pursess_amount;?></td>
															<td><?php  echo $data->payment;?></td>
															<td><?php  echo $data->due_amount;?></td>
															<td><?php  echo $data->advance;?></td>
															<td><?php  $status =  $data->paid; if($status == 1){ echo "Paid";}else{ echo "Due";}?></td>
															<td><a class="" href="<?php echo base_url();?>admin/clientdetail/<?php //echo $data->clientid;?>"><img src="<?php echo base_url();?>/admin_assets/images/statusicon.png" width="30px;"></a></td>
															
															<td><a href="<?php  echo base_url();?>inventory/edituser/<?php  echo $data->id;?>" class="btn btn-warning">Payment</a></td>
														</tr>
									 
															 <?php }
																}
															?> 
									 
													</tbody>
								
												</table>
												</div>
										</div>
															
														
						</div>	
					</div>	
				</div>	
			</div>	
		</div>	
	</div>
</section>										


				<!-- Modal -->
						<div class="modal fade" id="addvendor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog  modal-md" role="document">
							<div class="modal-content">
							  <div class="modal-header" style=" background-color: #126bbd;  color: white; ">
								<h4 class="modal-title" id="myModalLabel"> Add Vendor </h4>
							  </div>
							  <div class="modal-body" style="padding: 30px;">
								
								<form action="<?php echo base_url();?>vendor" method="POST" autocomplete="off">
							 
								  	<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="vendorname">Vendor ID</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="vendor_id" class="form-control" id="comments_add" placeholder="Vendor ID">
											</div>
										</div>
									</div>
									
									
									<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="vendorname">Vendor Name</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="vendorname" class="form-control" id="comments_add" placeholder="Vendor Name">
											</div>
										</div>
									</div>
									
									<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="address"> Address</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="address" class="form-control" id="comments_add" placeholder=" Address">
											</div>
										</div>
									</div>
									
									<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="mobile"> Mobile</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="mobile" class="form-control" id="comments_add" placeholder="Mobile">
											</div>
										</div>
									</div>

									


									<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="userid">Status</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<select class="form-control" id="active" name="active">
												  <option value="1">Active</option>
												  <option value="2">Inactive</option>
												</select>
											</div>
										</div>
									</div>


							

							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary">
							  </div>
							  
							  </form>
							</div>
						  </div>
						</div>						
						
					
