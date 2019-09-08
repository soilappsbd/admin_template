<section id="basic-form-layouts">
	<div class="content-wrapper">
		<div class="row match-height">
			<div class="col-12">	
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-content" style="padding: 10px;">	
			
							<button class="btn btn-primary"  data-toggle="modal" data-target="#addwarehouse"> Warehouse Name </button>
							

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
															<th>ID</th>
															<th>Warehouse Name</th> 
															<th>Product Code</th> 
															<th>Product Category</th> 
															<th>Product Quantity</th> 
															<th>Selling Prize</th> 
															<th>Status</th> 
															<th>Date</th> 
															<th>Edit</th> 
															
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
														
															<td><?php  echo $data->id;?></td>
															<td><?php echo $this->model_inventory->warehousenamebyid($data->warehouse_name);?></td>
															<td><?php  echo $data->productid;?></td>
															
															<td><?php echo $this->model_inventory->categorynamebyid($data->product_cat);?></td>
															
															<td><?php echo $data->product_qty;?></td>
															<td><?php echo $data->sell_rate;?></td>
															<td><?php  $status =  $data->flag; if($status == 1){ echo "Active";}else{ echo "In Active";}?></td>
															<td><?php echo $data->date;?></td>
															<td><a href="<?php  echo base_url();?>inventory/edituser/<?php  echo $data->id;?>" class="btn btn-warning">Edit</a></td>
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
						<div class="modal fade" id="addwarehouse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog  modal-md" role="document">
							<div class="modal-content">
							  <div class="modal-header" style=" background-color: #126bbd;  color: white; ">
								<h4 class="modal-title" id="myModalLabel"> 	Warehouse Name </h4>
							  </div>
							  <div class="modal-body" style="padding: 30px;">
								
								<form action="<?php echo base_url();?>warehouse" method="POST" autocomplete="off">
							 
								  	<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="category">Warehouse Name</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="warehouse" class="form-control" id="comments_add" placeholder="Warehouse Name">
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
						
	
