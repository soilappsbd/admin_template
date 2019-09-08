<section id="basic-form-layouts">
	<div class="content-wrapper">
		<div class="row match-height">
			<div class="col-12">	
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-content" style="padding: 10px;">	
			
							<button class="btn btn-primary"  data-toggle="modal" data-target="#additem"> Add Item </button>
							

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
															<th>Item Name</th> 
															<th>Active</th> 
															<th>Edit Item</th> 

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
															<td><?php  echo $data->itemname;?></td>
															<td><?php  $status =  $data->active; if($status == 1){ echo "Active";}else{ echo "In Active";}?></td>
															<td>
															<a href="<?php  echo base_url();?>edititem/<?php  echo $data->id;?>" class="btn btn-warning">Edit</a></td>
															
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
						<div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog  modal-md" role="document">
							<div class="modal-content">
							  <div class="modal-header" style=" background-color: #126bbd;  color: white; ">
								<h4 class="modal-title" id="myModalLabel"> Add Item </h4>
							  </div>
							  <div class="modal-body" style="padding: 30px;">
								
								<form action="<?php echo base_url();?>additem" method="POST" autocomplete="off">
							 
								  	<div class="row">
										<label class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-3 text-right" style="padding: 10px;" for="itemname">Item Name</label>
										<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 col-9">
											<div class="form-group">
												<input type="text" name="itemname" class="form-control" id="comments_add" placeholder="Item Name">
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
						
						
						
						

