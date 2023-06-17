<?php

session_start();
if(!isset($_SESSION["uid"])){
	
	
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Personal Information</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #3C6E71; height: 50px;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="profile.php" class="navbar-brand">Health Market</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">No.</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="userinfo.php" style="text-decoration:none; color:black;">Personal Information </a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">Personal Information</div>
					<div class="panel-body">
					<table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
						<tr>
						<th>Name</th>    
						<th>Surname</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Address</th>
						<?php
						require 'db.php';   //include connection//include connection
						$data = mysqli_query($con,"Select * from users where user_id = '$_SESSION[uid]'");  //mysql query for specific username            
						 if($data === FALSE) { 
						die(mysqli_error()); // TODO: better error handling
						}
						while($row = mysqli_fetch_array($data)) {?>
						<tr>
						
						<td><?php echo  $row['name'];?></td>
						<td><?PHP echo  $row['surname']; ?></td> 
						<td><?php echo  $row['email'];?></td>
						<td><?PHP echo  $row['phone_nr']; ?></td>                
						<td><?PHP echo  $row['address']; ?></td>

						

						</tr>
						<?php } ?>

						</table>
					<div align="center">
						<a href="updateuserinfo.php" class="btn btn-primary" >
						UPDATE YOUR	 INFO</br></a>
					</div>
					</div> 
					</div>
	</body>
</html>
















































