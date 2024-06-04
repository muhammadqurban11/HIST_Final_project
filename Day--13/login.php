<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			background: #889ea0;
		}
	</style>

</head>
<body>


	<?php

	
	include("header.php");

	?>
<center>
<form action="">
	<h1 style="background-color: #80897b;">LOGIN FORM</h1>
	<div class="col-md-4">
	    <label for="validationDefaultUsername" class="form-label">Email</label>
	    <div class="input-group">
	      <input type="Email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
	    </div>
	  </div>
	<div class="col-md-4">
	    <label for="validationDefaultUsername" class="form-label">Password</label>
	    <div class="input-group">
	    
	      <input type="Password" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
	    </div>
	</div>
	<br>
	<div class="col-12">
	    <button class="btn btn-primary" type="submit">Submit </button>
	  </div>
	  <br>
	  <div class="col-12">
	    <button class=" btn btn-primary" type="submit" style="background-color: skyblue; text-decoration-color: white;"> <a href="http://localhost/19839%20Muhammad%20Qurban/Day--8/forget_password.php">Forget Password </a></button>
	  </div>
	</form>
</center>


	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>