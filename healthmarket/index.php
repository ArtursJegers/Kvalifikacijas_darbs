<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Health Market</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<style></style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top"style="background-color: #3C6E71; height: 50px;">
		<div class="container-fluid">	
			<div class="navbar-header">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Health Market</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="login_form.php">LOGIN</a></li>
			</ul>
		</div>
	</div>
</div>

<!--Logo in website-->
<img src="">

<!--Heading-->
<h1>About Us</h1>

<!--Columns for text aligment-->
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-9">

            <!--Website information-->
            <p>
                Computers are a big part of our daily life, so it's important to make sure that you don't harm your health while using them.
                That's why in our shop you can find plenty of items to keep you healthy and comfortable. 
                Along the way, we have variety of payment methods which might be more accesible for you.
            </p>
        </div>
        <div class="col">
        </div>
    </div>

                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
















































