<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/custom/css/style.css">
	 
    <title>Hello, world!</title>
  </head>
  <body>

	<div class="container-fluid">
		<!-- Content here -->
		
		<div class="top-bar">
			<div class="row">
				<div class="col">
					<img src="<?php echo base_url();?>admin_assets/images/logo.png" class="logo">
				</div>
				<div class="col">
				   <div class="float-right">avatar</div>
				</div>
			
			</div>
		</div>
		
		<div class="row">
			<div id="navigation_bar">
				<nav class="navbar navbar-expand-lg">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="#">Action</a>
						  <a class="dropdown-item" href="#">Another action</a>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#">Something else here</a>
						</div>
					  </li>
					
					</ul>
					
				  </div>
				</nav>
			</div>
		</div>
		
		<div class="row">
				<div class="col">
					<div class="line_bottom"> </div>
				</div>
		</div>
		
		<?php echo $content;?>
		
	</div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>admin_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
  </body>
</html>