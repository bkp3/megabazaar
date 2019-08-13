<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
	<meta name="viewport" content="width-device-width"/>
	<title>Hello World</title>
	<meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="styesheet" href="css/style.css"/>

</head>
<body>

	<div class="container-fluid">
		
		<div class="container-fluid" style="background-color: black; color:red;">
		
			<div class="container">
				<p class="pull-right">E-mail:bholakumar.7372@gmail.com</p>
			</div>
		
		</div>

		<div class="container">
			<h1><font face="Centaur">My Shop</font></h1>
		</div>
		
		<div class="container">

			<div class="container" style="background-color: green;color:red;">
				<div class="row">
					<div class="col-sm-12 mymanu">
						
						<nav class="navbar">
							
							<div class="navbar-header">
								
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
									<span class="icon-bar">--</span>
									<span class="icon-bar">--</span>
									<span class="icon-bar">--</span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="mystyle">
								<ul class="nav navbar-nav">
									
									<li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
									<li ><a href="#"><font color="white">Product</font></a></li>
									<li ><a href="#"><font color="white">Sell</font></a></li>
									<li ><a href="index.php"><font color="white">Log out</font></a></li>
								</ul>
								
							</div>
						</nav>
					</div>

				</div>
			</div>


		</div>

		<div class="container">
			<h1><center>Insert Category</center></h1><br><br>
			<form action="" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>Category Title</td>
					<td><input type="text" name="cat_title" placeholder="Enter Category Title" class="form-control" required="required"></td>
				</tr>
				
				
				
				<tr>
					<td colspan="2"><center><input type="submit" name="sub" value="Save" class="btn btn-primary"></center></td>
					
				</tr>

			</table>
			</form>
			<?php
			if(isset($_POST['sub']))
			{
				$cat_title=$_POST['cat_title'];
				
				
				

				if(mysqli_query($conn,"insert into categories(cat_title) values('$cat_title')"))
				{
					echo "<script>alert('Data Save')</script>";
				}
				else
				{
					echo "<script>alert('Data not Save')</script>";
				}

			}
			?>


		</div>









		<dir class="container" style="background-color: orange;color:purple;">
			<p align="center">copyright</p>
		</dir>

	</div>
	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>