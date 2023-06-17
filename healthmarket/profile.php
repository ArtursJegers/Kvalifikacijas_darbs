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
				<a href="profile.php" class="navbar-brand">Health Market</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#" id="categories_container" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
			<ul class="dropdown-menu">
						<li><a href="itemsforback.php" style="text-decoration:none; color:black;">Items for back</a></li>
						<li class="divider"></li>
						<li><a href="itemsforwrist.php" style="text-decoration:none; color:black;">Items for wrists</a></li>
						<li class="divider"></li>
						<li><a href="chairs.php" style="text-decoration:none; color:black;">Chairs</a></li>
						<li class="divider"></li>
						<li><a href="desks.php" style="text-decoration:none; color:black;">Desks</a></li>
						<li class="divider"></li>
						<li><a href="massagers.php" style="text-decoration:none; color:black;">Massagers</a></li>
					</ul></li>
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
		<div id="get_product">
						<!--Here we get product Request-->
		</div>
</body>
</html>