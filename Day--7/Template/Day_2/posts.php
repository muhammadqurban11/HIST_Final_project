<!DOCTYPE html>
<html>
<head>
	<title> .: Bootstrap Day Two Dummy Site :. </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		@font-face{
			font-family: header-fonts;
			src: url(NoizeSportFreeVertion-Regular.ttf);
			}

		#posts{
			font-family: header-fonts;
			text-shadow: 3px 4px 2px gray;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row my-5 text-center">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="posts"> Posts </h1>
				</div>
			</div>
<?php 
	include("connection.php");

	$query = "SELECT * FROM posts";

	$result = mysqli_query($connection, $query); 

	if($result->num_rows>0){
		while ($rows=mysqli_fetch_assoc($result)){
			?>
			<div class="card text-center my-4">
			  <div class="card-header">
			    <?php echo $rows['post_id']?>
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">
			    	<?php echo $rows['post_title']?>
		    	</h5>
			    <p class="card-text">
			    	<?php echo $rows['post_description']?>
			    </p>
			  </div>
			  <div class="card-footer text-body-secondary">
			    	<?php echo $rows['is_active']?>
			  </div>
			</div>
			<?php
		}
	}
?>
</div>
</body>
</html>