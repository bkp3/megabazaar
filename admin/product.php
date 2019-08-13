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
			<h1><center>Insert Product</center></h1><br><br>
			<form action="" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>Category Id</td>
					<td><input type="text" name="cat_id" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Brand Id</td>
					<td><input type="text" name="brand_id" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Product Title</td>
					<td><input type="text" name="product_title" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Product Price</td>
					<td><input type="text" name="product_price" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Product Desc</td>
					<td><input type="text" name="product_desc" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Product Image</td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td>Product Keywords</td>
					<td><input type="text" name="product_keywords" placeholder="Enter product name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="sub" value="Save" class="btn btn-primary"></center></td>
					
				</tr>

			</table>
			</form>
			<?php
			if(isset($_POST['sub']))
			{
				$cat_id=$_POST['cat_id'];
				$brand_id=$_POST['brand_id'];
				$product_title=$_POST['product_title'];
				$product_price=$_POST['product_price'];
				$product_desc=$_POST['product_desc'];
				
				$image=$_FILES['img']['name'];
				$image_tmp=$_FILES['img']['tmp_name'];
				move_uploaded_file($image_tmp,"c/$image");

				$product_keywords=$_POST['product_keywords'];
				if(mysqli_query($conn,"insert into products (product_cat,product_brand,product_title,product_price,product_desc,img,product_keywords) values('$cat_id','$brand_id','$product_title','$product_price','$product_desc','$image','$product_keywords')"))
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