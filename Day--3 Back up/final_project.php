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
	    	<img src="image/mqlogo.jpg" style="width: 75px;">
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
		    <li><button class="dropdown-item" type="button">Blog</button></li>
		    <li><button class="dropdown-item" type="button">Users</button></li>
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
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				   Contact Us
				</button>
				<ul class="dropdown-menu">
				   <li><button class="dropdown-item" type="button">Email</button></li>
				   <li><button class="dropdown-item" type="button">Mobile No</button></li>
				</ul>
			    </div>
			    </ul>
			  </div>
			</div>
			<button class="model" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">login</button>
			<button class="model" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin1">Register</button>
	<form class="d-flex" role="search">
     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-warnig" type="submit">Search</button>
    </form>
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
	  <div class="row ">
	  	<div class="col-2 ">
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

		<div class="col-2  ">
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
					<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button class="btn btn-primary" type="submit">Login Here</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>
		</div>
	<!-- registration Form -->
	<div class="modal fade" id="staticBackdropLogin1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Here</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			     <div class="modal-body">
			        
			      	<form class="row g-3 needs-validation" novalidate>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">First Name</label>
					    <div class="input-group has-validation">
					    <input type="text" class="form-control" id="first_name" aria-describedby="validationTooltipUsernamePrepend" required>
					    </div>
					  </div>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">Last Name</label>
					    <div class="input-group has-validation">
					    <input type="text" class="form-control" id="last_name" aria-describedby="validationTooltipUsernamePrepend" required>
					    </div>
					  </div>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">Email</label>
					    <div class="input-group has-validation">
					    <input type="Email" class="form-control" id="email" aria-describedby="validationTooltipUsernamePrepend" required>
					    </div>
					  </div>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipPassword" class="form-label">Password</label>
					    <div class="input-group has-validation">
					      <input type="password" class="form-control" id="pPassword" aria-describedby="validationTooltipUsernamePrepend" required>
					      <div class="invalid-tooltip">
					        Password Must 8 to 12 Character
					      </div>
					    </div>
					    <div>
					    <form>
					    	<td></td>
					    	<td> Gender : </td>
					    	<td> Male  <input type="radio"></td>
					    	<td> Female  <input type="radio"></td>
					    	<td> Other  <input type="radio"></td>
					    </form>
					    </div>
					 </div>
					 <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">Date Of Birth: </label>
					    <div class="input-group has-validation">
					    <input type="date" class="form-control" id="date_of_birth" aria-describedby="validationTooltipUsernamePrepend" required>
					    </div>
					 </div>
					  <div class="col-md-12 position-relative">
					    <label for="validationTooltipUsername" class="form-label">Home Town: </label>
					    <div class="input-group has-validation">
					    <input type="text" class="form-control" id="g=home_town" aria-describedby="validationTooltipUsernamePrepend" required>
					    </div>
					 </div>
					 <div class="modal-footer">
				     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				     <button class="btn btn-primary" type="submit">Register</button>
				     </div>
					</div>
				</div>
			</div>
		</div>

	<!-- Comment Box -->
	
			
	<!-- Comment Box End -->
				
			      
			   

	<!-- registration Form End -->


	<!-- contact us -->
	<div class="row mt-3 text-center" id="about_us">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="contact_us_heading"> Contact Us </h1>
				</div>
			</div>
			<div class="row" id="contact_us">
				<div class="col bg-primary text-center p-5 mt-5 text-white">
					<h2 id="contact_us_number"> +92-334-2062146 </h2>
					<p> Try is Key of Success </p>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
						</svg>
  						Contact Us
					</button>
				</div>
			</div>
	<!-- contact us end -->
		




		<!-- footer -->
	<div class="row" style="background-color: #d4d8d5">
	 <div class="col-lg-3 col-md-6 col-sm-12 text-center">
		<img src="image/mqlogo.jpg" class="p-5" style="width: 220px;">
	 </div>

	<div class="col-lg-3 col-md-6 col-sm-12 mt-5 text-center">
		<p>
			<a href="#our_courses" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Our Courses</a>
		</p>
		<p>
			<a href="#our_team" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Our Team</a>
		</p>
		<p>
			<a href="#about_us" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">About Us</a>
		</p>
		<p>
			<a href="#contact_us" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contact Us</a>
		</p>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 my-2 text-center text-black">
		<p>
			Anyone can connect with their audience through blogging and enjoy the myriad benefits that blogging provides: organic traffic from search engines, promotional content for social media, and recognition from a new audience you haven’t tapped into yet.

			If you’ve heard about blogging but are a beginner and don’t know where to start, the time for excuses is over. Notonly can you create an SEO-friendly blog, but we’ll cover how to write and manage your business's blog as well as provide helpful templates to simplify your blogging efforts.
		</p>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="row mt-3">
			<h4 class="text-center fw-bold">Image Gallery</h4>
			<div class="col-4">
				<img src="image/blog.2.jpg" class="img-fluid h-100 w-100 shadow rounded">
			</div>
			<div class="col-4">
				<img src="image/th-18259528.jpg" class="img-fluid h-100 w-100 shadow rounded">
			</div>
			<div class="col-4">
				<img src="image/image 1.webp" class="img-fluid h-100 w-100 shadow rounded">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-4">
				<img src="image/blog.1.jpg" class="img-fluid h-100shadow rounded">
			</div>
			<div class="col-4">
				<img src="image/image 3.jpg" class="img-fluid h-100 shadow rounded">
			</div>
			<div class="col-4">
				<img src="image/blog.1.jpg" class="img-fluid h-100 shadow rounded">
			</div>
		  </div>
		</div>
	</div>
		<!-- footer End -->

		<div class="row">
			<div class="col text-center text-white py-2 bg-secondary">
				<span class="fw-lighter">@Copyright <?php date_default_timezone_set("Asia/Karachi"); echo date("Y"); ?></span><span class="fw-bold"> | Developed By: HIST Software Team </span>
			</div>
		</div>

	

	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>