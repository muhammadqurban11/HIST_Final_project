<!DOCTYPE html>
<html>
<head>
	<title>Post Active</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

	<?php
	include("header.php");
	?>
	<center>
	<h3 style="background-color: lightyellow;">Approve Post</h3>
	<div class="col-4">
		<div><button>Active</button>
		  	<button>Inactive</button>
		  	<button style="background-color: lightgreen">Follow</button>
		  	<button style="background-color: lightgreen">Unfollow</button>
		</div>
		  <div class="card">
		    <img src="image/cricket.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Blog</h5>
		      <p class="image/th-18259528.jpgard-text"></p>
		      <textarea name="" id="" cols="40" rows="10"></textarea>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		   <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  		Comment
			</button>
			<button type="Approve" class="btn btn-primary" >
	  		Approve
			</button>
			</div>
			</center>
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<textarea name="" id="" cols="45" rows="5"></textarea>
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </div>
			</div>
		  </div>
		</div>
	<?php
	// include("header.php");
	include("category_blogs.php");
	?>
		<?php

		include("footer.php");


		?>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>