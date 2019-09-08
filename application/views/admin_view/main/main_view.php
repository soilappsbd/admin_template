<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/custom/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	
    <title>Inventory Management System </title>
	
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>


  
	<div class="container-fluid">

	<!-- Header Part Start-->
	
		<div class="top-bar">
			<div class="row">
				<div class="col">
					<img src="<?php echo base_url();?>admin_assets/images/logo.png" class="logo">
				</div>
				<div class="col">
				   <div class="company_name"><h4>Company Name</h4></div>
				</div>
				<div class="col" >
				   <img src="<?php echo base_url();?>admin_assets/images/avatar.png" class="avater">
			</div>
		</div>
		
	<!-- Header Part Start-->
		
		<!--Navbar stat-->
		
			<div class="topnav">
				<a class="active" href="<?php echo base_url();?>">Home <span class="sr-only"></span></a>
				<a class="nav-link" href="<?php echo base_url();?>additem"><i class="fa fa-cart-arrow-down"></i> Add Item</a>
				<a class="nav-link" href="<?php echo base_url();?>category"><i class="fa fa-cubes"></i> Add Category</a>
				<a class="nav-link" href="<?php echo base_url();?>product"><i class="fa fa-cube"></i> Product Add</a>
				<a class="nav-link" href="<?php echo base_url();?>vendor"><i class="fa fa-users"></i> Vendor</a>
				<a class="nav-link" href="<?php echo base_url();?>warehouse"><i class="fas fa-house-damage"></i> Warehouse</a>
				<a class="nav-link" href="<?php echo base_url();?>order"><i class="fas fa-dollar-sign"></i> Order</a>
				<a class="nav-link" href="<?php echo base_url();?>setting"><i class="fas fa-wrench"></i> Setting</a>
				<a class="nav-link" href="<?php echo base_url();?>user"><i class="fas fa-user-tie"></i> Member</a>
				<a class="nav-link" href="<?php echo base_url();?>report"><i class="fas fa-chart-bar"></i> Report</a>
				
			</div>
				
		<!--Navbar end-->

	<!--Content dashboard -->
		<div class="row">
				<div class="col">
					<div class="line_bottom"> </div>
				</div>
		</div>
		
		<?php echo $content;?>
		
	<!--Content dashboard -->
		
	</div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="<?php echo base_url();?>admin_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
	
<!--	<script type="text/javascript">
		$(document).ready(function() {
		$('#datatable').DataTable();
		} );
	</script> -->
	
	
	<script type="text/javascript">
		$(document).ready(function() {
		$('#mydatatable').DataTable();
		} );
	</script>
	
  </body>
</html>