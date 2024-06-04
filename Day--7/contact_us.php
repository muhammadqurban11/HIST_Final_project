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
	<h1 style="background-color: #80897b;">Contact Us</h1>
	<div class="row g-3" >
	  <div class="col-md-4">
	    <label for="validationDefault01" class="form-label">Email</label>
	    <input type="email" class="form-control" id="validationDefault" value="" required>
	  </div>
	  <div class="col-md-4">
	    <label for="validationDefault02" class="form-label">Mobile No :</label>
	    <input type="number" class="form-control" id="validationDefault" value="" required>
	  </div>
	  <div class="col-12">
	    <button class="btn btn-primary" type="submit">Submit</button>
	  </div>
	</div>
	</center>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>