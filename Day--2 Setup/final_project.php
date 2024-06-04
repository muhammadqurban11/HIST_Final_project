<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>
<body>
	<!-- <center><h1 style="background: gray;"> ONLINE BLOGGING APPLICATION</h1></center> -->
	<!-- nav bar -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #544f46">
	  <div class="container-fluid">
	    	<img src="image/logo958920338.jpg" style="width: 75px;">
	    <a class="navbar-brand" href="#">Online Blogging Application
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
	        </li>
	    <div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		    Home
		  </button>
		  <ul class="dropdown-menu">
		    <li><button class="dropdown-item" type="button">Action</button></li>
		    <li><button class="dropdown-item" type="button">Another action</button></li>
		    <li><button class="dropdown-item" type="button">Something else here</button></li>
		  </ul>
		</div>
	        <li class="nav-item">
	          <!-- <a class="nav-link" href="#">Pages</a> -->
	        </li>
	   	<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			   Blog 
			</button>
			<ul class="dropdown-menu">
			   <li><button class="dropdown-item" type="button">Category</button></li>
			   <li><button class="dropdown-item" type="button">Subcategory</button></li>
			</ul>
		</div>
		<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			   About Us
			</button>
			<ul class="dropdown-menu">
			   <li><button class="dropdown-item" type="button">Courses</button></li>
			   <li><button class="dropdown-item" type="button">Team</button></li>
			</ul>
		     </div>
		    </ul>
		  </div>
		</div>
		<button class="model" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">login</button>
		<button class="btn" type="submit" href="#register.php">Register</button>
		        
	  


	</nav>
	<!-- nav bar end -->
	<!-- slider  -->
	<div id="carouselExampleCaptions" class="carousel slide">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="image/image 1.webp" class="d-block w-100" alt="No Images" style="height:640px;">
	      <div class="carousel-caption d-none d-md-block">
	        <h5> Blogging is an ART to Describe the Feelings </h5>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="image/image 3.jpg" class="d-block w-100" alt="No Images" style="height:640px;">
	      <div class="carousel-caption d-none d-md-block">
	        <h5> Blogging is an ART to Describe the Feelings </h5>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="image/th-18259528.jpg" class="d-block w-100" alt="No Images" style="height:640px;">
	      <div class="carousel-caption d-none d-md-block">
	        <h5> Blogging is an ART to Describe the Feelings </h5>
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- slider  End-->

	<!-- post -->
	<div class="container">
		<div class="container">
		<!-- Our Courses -->
			<div class="row my-5 text-center" id="our_courses">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="our_courses_heading">Our BLogs</h1>
				</div>
			</div>
		</div>
	</div>
	
		
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-2">
		  <div class="card">
		    <img src=".." class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"></h5>
		      <p class="card-text"> </p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div> 
		<div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>  
		 <div class="col-2">
		  <div class="card">
		    <img src="image/th-18259528.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		   </div>
		  </div>
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 1.webp" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 1.webp" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
	  </div> 
	</div>

	<!-- right side blogs -->
	<div class="container-fluid">
		<div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>  
		 <div class="col-2">
		  <div class="card">
		    <img src="image/th-18259528.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		   </div>
		  </div>
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 1.webp" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 1.webp" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
	  </div> 
	<!-- right side blogs end -->
	
	
		
	<!-- post End -->

	<div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Here</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			     <div class="modal-body">
			        
			      	<form class="row g-3 needs-validation" novalidate>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">Username</label>
					    <div class="input-group has-validation">
					      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
					      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
					      <div class="invalid-tooltip">
					        Please choose a unique and valid username.
					      </div>
					    </div>
					  </div>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipPassword" class="form-label">Password</label>
					    <div class="input-group has-validation">
					      <input type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
					      <div class="invalid-tooltip">
					        Password Must 8 to 12 Character
					      </div>
					    </div>
					 </div>
					 <!-- <div class="col-12"> -->
				
			      
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button class="btn btn-primary" type="submit">Login Here</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>
		</div>

		<div class="row">
			<div class="col text-center text-white py-2 bg-secondary">
				<span class="fw-lighter">@Copyright <?php date_default_timezone_set("Asia/Karachi"); echo date("Y"); ?></span><span class="fw-bold"> | Developed By: HIST Software Team </span>
			</div>
		</div>

	

	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>