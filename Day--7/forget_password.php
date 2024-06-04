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


	include("header_login.php")
?>
<center>
<form action="">
	<h1 style="background-color: #80897b;">Forget Password</h1>
<div class="col-md-4">
	    <label for="validationDefaultUsername" class="form-label">Email</label>
	    <div class="input-group">
	      <input type="Email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
	    </div>
	  </div>
<br>
<div class="col-md-4">
	    <label for="validationDefaultUsername" class="form-label"> Old Password</label>
	    <div class="input-group">
	    
	      <input type="Password" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
	    </div>
</div>
<br>
<div class="col-md-4">
	    <label for="validationDefaultUsername" class="form-label"> New Password</label>
	    <div class="input-group">
	    
	      <input type="Password" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
	    </div>
</div>
<br>
<div class="col-12">
	    <button class="btn btn-primary" type="submit">Password Changed</button>
	  </div>
	  <br>
	</form>
</center>


	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>