<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mega Bazaar</title>
  
  
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
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
	<p><br/></p>
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!-- Alert from signup form -->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
						
						<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" class="form-control" name="f_name">		
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" class="form-control" name="l_name">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="email" id="email" class="form-control" name="email">
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" class="form-control" name="password">
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" class="form-control" name="repassword">
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" class="form-control" name="mobile">
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" class="form-control" name="address1">
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" class="form-control" name="address2">
							</div>
							
						</div>
						<p><br/></p>

						<div class="row">
							<div class="col-md-12">
								
								<input style="float:right;" value="Sign Up" type="button" id="signup_button" class="btn btn-success btn-lg" name="signup_button">
							</div>
							
						</div>


						
					</div>
				</form>
					<div class="panel-footer">dkfj</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>
	

</body>
</html>