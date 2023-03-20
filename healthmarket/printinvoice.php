<script>
function forprint(){
if (!window.print){

return
}
window.print()
}
</script>

<?php
include('codconf.php');

$user_id = $_SESSION["uid"];

$trx_id=$_SESSION["trx_id"] ;

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Successful</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #3C6E71; height: 50px;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="profile.php" class="navbar-brand">Health Market</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav navbar-right">
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
			<div style="clear: both">
				<h1 style="float: left">Health Market </h1><br>
				<h3 style="float: right">INVOICE </h3><br><br><br>
				<h5 style="float: left"><?php
						
						
						require 'db.php';   //include connection
						$data = mysqli_query($con, "SELECT order_id from orders WHERE user_id='$_SESSION[uid]'and p_status='COD' and trx_id='$trx_id'");
					
						if($data === FALSE) { 
						die(mysql_error()); // TODO: better error handling
						}
						$var='';
						while($row = mysqli_fetch_array($data)) {?>
						
						<?php $var= $var.$row['order_id'];?>
						
						<?php } ?> BILL ID :&nbsp;<?php echo $var;?>&nbsp;&nbsp;&nbsp;Transaction ID : &nbsp;<?php echo $trx_id;?>
					</h5>
				
				<h6 style="float: right"><?php echo $date; ?></h6>
			</div>
			
			
			</div>
			<div class="col-md-2"></div>
			
		</div>
		<br>
		<div class="row"> 
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-heading">USER INFORMATION</div>
					<div class="panel-body">
						
						<?php
						
						
						require 'db.php';   //include connection
						$data = mysqli_query($con, "SELECT * from users WHERE user_id='$_SESSION[uid]'");

						if($data === FALSE) { 
						die(mysql_error()); // TODO: better error handling
						}
						
						while($row = mysqli_fetch_array($data)) {?>
						<tr>
						
						<td><?php echo "To: ", $row['name'];?></td>
						<td><?PHP echo  $row['surname']; ?></td> 
						<br>
						<td><?PHP echo "Email: ",$row['email']; ?></td> 
						<br>
						<td><?PHP echo "Phone number: " ,$row['phone_nr']; ?></td> 
						<br>
						<td><?PHP echo "Adress: " ,$row['address']; ?></td> 
					
						</tr>
						
						<?php } ?>
						
						
					</div> 
					
					</div>
				</div>
			</div>
			
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-heading">PRODUCT INFORMATION</div>
					<div class="panel-body">
						
						
						<table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
						<tr>
						<th>No.	</th>
						<th>Product Name</th>    
						<th>Quantity</th>  
						<th>Product Price</th>                  
						</tr>
						<?php
						require 'db.php';   //include connection
						
						
						$data = mysqli_query($con,"SELECT * FROM products ,orders  WHERE products.product_id=orders.product_id AND orders.user_id='$user_id' AND orders.p_status='COD'and trx_id='$trx_id'");

					
						if($data === FALSE) { 
						die(mysqli_error()); // TODO: better error handling
						}
						
						
						
						$total=0;$count=1;
						while($row = mysqli_fetch_array($data)) {?>
						<tr>
						<td><?PHP echo $count?></td>
						<td><?php echo  $row['product_title'];?></td>
						<td><?PHP echo  $row['qty']; ?></td> 
						<td><?PHP echo  $row['product_price']; ?></td> 
						<?PHP 
						$total=$total+$row['product_price'];
						$count++;	
						?>
					
						</tr>
						
						<?php } ?>
						

						</table>
						<div  align="right" style="font-size:20px;"><b>Overall Price = <?PHP echo  $total;?></b></div>
						
					

					</div> 
					
				</div>
					<div align="center">
						<a href="javascript:forprint()" class="btn btn-success" >
						Print Transaction Report</br></a>
						
					</div><br><br><br>
					<div align="center"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>















		