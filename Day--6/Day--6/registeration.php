<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
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
	<h1 style="background-color: #80897b;">REGISTRATION FORM</h1>

	<form class="row g-3" action="querray.php">
	  <div class="col-md-4">
	    <label for="validationDefault01" class="form-label">First name</label>
	    <input type="text" class="form-control" id="validationDefault01" value="" required>
	  </div>
	  <div class="col-md-4">
	    <label for="validationDefault02" class="form-label">Last name</label>
	    <input type="text" class="form-control" id="validationDefault02" value="" required>
	  </div>
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
	  <div class="col-md-6">
	    <label for="validationDefault03" class="form-label">Home Town</label>
	    <input type="text" class="form-control" id="validationDefault03" required>
	  </div>
	  <div>
	  	<tr>
	  		<td>Date Of Birth</td>
	  		<input type="date" name="date_of_birth">
	  	</tr>
	  </div>
	  <div>
	  	<tr>
	  		<td>Gender : </td>
	  		Male <input type="radio" name="male">
	  		Femlae <input type="radio" name="female">
	  		Other <input type="radio" name="other"> 
	  	</tr>
	  </div>
	  <div>
	  	<tr>
	  		<td>Insert image</td>
	  		<input type="file" name="image" value="Insert image">
	  	</tr>
	  </div>
	  <div class="col-12">
	    <button class="btn btn-primary" type="submit">Submit form</button>
	  </div>
	</form>
	</center>

	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>