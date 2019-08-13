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
						<h1>Thank you</h1>
						<hr/>
						
						<p>Hello <?php echo $_SESSION["name"]; ?> Your Payment is successfully completed and your transaction id is xxxxxxxxx<br/> You can continue shopping<br/></p>
						<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>


					</div>
					<div class="panel-footer"></div>

				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
		
	</div>

	


</body>
</html>