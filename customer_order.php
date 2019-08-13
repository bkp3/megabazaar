<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mega Bazaar</title>
  
  
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <style>
  	table tr td {padding: 10px;}
  </style>
</head>


<body>
	<div class="navbar navbar-inverse  navbarr-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Mega Bazaar</a>
			</div>

		  <ul class="nav navbar-nav">
		    <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		    <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
		    

		  </ul>

		  
		</div>
	</div>		  
	
	<p><br></p>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer order details</h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<img style="float: right;" src="admin/c/tv5.jpg" class="img-thumbnail" width="200px" height="200px">
							</div>
							<div class="col-md-6">
								<table >
									<tr><td>Product Name:- </td><td><b>Sony Camera</b></td></tr>
									<tr><td>Product Price:- </td><td><b>$500</b></td></tr>
									<tr><td>Quantity:- </td><td><b>3</b></td></tr>
									<tr><td>Payment:- </td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id:- </td><td><b>WEKRHKESJHFUI3479327</b></td></tr>
								</table>
							</div>

						</div>



					</div>
					<div class="panel-footer"></div>

				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
		
	</div>

	


</body>
</html>