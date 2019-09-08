<section id="basic-form-layouts">
	<div class="content-wrapper">
		<div class="row match-height">
			<div class="col-12">	
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-content" style="padding: 10px;">	
			

								<br/>
										<p>
										   <?php 
											 if($this->session->flashdata("msg")){
												echo $this->session->flashdata("msg");
											 }	
											 
											
											?>
										</p>
										
									<form class="form-inline" action="<?php echo base_url();?>edititem" 
										role="form" method="POST" style=" padding-bottom: 20px;">
												<?php foreach($arr as $edititem){
													//pd($arr);
												?>
												<input type="hidden" name="id" value="<?php echo $edititem->id;?>">		

												<div class="form-group inline-padding">
													<label class="inline-padding" style="padding-right: 10px;">Item Name</label>
														<input type="text" name="edititem" class="form-control" value="<?php echo $edititem->itemname;?>">
												</div>
												
												<div class="form-group inline-padding">
													<label class="inline-padding" style="padding-right: 10px; padding-left: 10px;">Status</label>
														<select class="form-control" id="active" name="active">
															  <option value="1">Active</option>
															  <option value="2">Inactive</option>
														</select>
												</div>
												
											   <div class="form-group inline-padding">
													<input type="submit" value="Update" class="btn btn-primary">
											   </div>
											<?php };?>	
									</form>
										
										
										
										
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
															<a href="<?php  echo base_url();?>edititem/<?php  echo $data->id;?>" class="btn btn-warning">Edit</a>
															</td>
															
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

