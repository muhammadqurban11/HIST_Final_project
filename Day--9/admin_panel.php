<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Bootstrap Examples/bootstrap_examples/sidebars/sidebars/.css">
</head>

	<?php
	include("headeradmin.php");
	?>
		<!-- POST -->
		<br>
		<br>
	<div class="container">
		<div class="row">
	<div class="dropdown col-4" >
  <h3>Account Request</h3>
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Admin
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Pending</a></li>
    <li><a class="dropdown-item" href="#">Approve</a></li>
    <li><a class="dropdown-item" href="#">Reject</a></li>
  </ul>
</div>
<div class="dropdown col-4" >
  <h3>Account</h3>
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    User
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Active</a></li>
    <li><a class="dropdown-item" href="#">Inactive</a></li>
   
  </ul>
</div>
<div class="dropdown col-4" >
  <h3>Blogs</h3>
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Blogs
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/category_blogs.php">Category</a></li>
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php">Subcategory</a></li>
    </ul>
</div>
<br>
<div class="dropdown col-4" >
	<br>
  <h3>Post Information</h3>
	<br>
  
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Post Information
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/category_blogs.php">Add Post</a></li>
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php">Update Post</a></li>
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php">Active</a></li>
    <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php">Inactive</a></li>
    </ul>
</div>
<div class="dropdown col-4" >
  <h3>Comment</h3>
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Comments
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Active Comment</a></li>
    <li><a class="dropdown-item" href="#">Inactive Comment</a></li>
    </ul>
</div>

</div>
</div>
	<div class="row">
		<div class="col-8">
			
		</div>
	</div>
			
		
  
		<!-- POST End -->
<br>
<br>
<br>
<br>
<br>
<br>



	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="Bootstrap Examples/bootstrap_examples/sidebars/sidebars/.js"></script>

</body>
</html>