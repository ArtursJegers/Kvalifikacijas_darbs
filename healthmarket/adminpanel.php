
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/profile.css">
		<script src="main.js"></script>
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
				<a href="adminpanel.php" class="navbar-brand">ADMIN PANEL</a>
			</div>
            <div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#" id="categories_container" class="dropdown-toggle" data-toggle="dropdown">MANAGE</a>
			<ul class="dropdown-menu">
						<li><a href="adminpanel.php" style="text-decoration:none; color:black;">Dashboard</li>
						<li class="divider"></li>
						<li><a href="adminpanel-customers.php" style="text-decoration:none; color:black;">Customers</a></li>
						<li class="divider"></li>
						<li><a href="adminpanel-category.php" style="text-decoration:none; color:black;">Category</a></li>
						<li class="divider"></li>
						<li><a href="adminpanel-products.php" style="text-decoration:none; color:black;">Products</a></li>
						<li class="divider"></li>
						<li><a href="adminpanel-orders.php" style="text-decoration:none; color:black;">Orders</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php" style="text-decoration:none; color:black;">Log Out</a></li>
					</ul></li>
</div>
<table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">  
						<th>Total Users</th>
						<?php
						require 'db.php';   //include connection//include connection
						$sql=("SELECT COUNT(*) FROM users");  ?>     
						<th>Total Products</th>
						<?php $sql=("SELECT COUNT(*) FROM products");?>  
						<th>Total Orders</th>
						<?php $sql=("SELECT COUNT(*) FROM orders");?>
						
</table>

