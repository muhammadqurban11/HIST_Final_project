<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<!-- nav bar  -->
	<?php
	include("header.php");
	?>
	<!-- nav bar End -->

	<!-- slider  -->
	<h2 style="background-color: #80897b; text-align: center; color: white;" ><b>User Panel</b></h2>
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
	<!-- post -->
	<div class="container">
		<div class="container">
		<!-- Our Courses -->
			<div class="row my-5 text-center" id="our_courses">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #544f46 ;  text-underline-offset:15px; color: #80897b;" id="our_courses_heading" style="background-color: #b9bcb7">Our Blogs</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
	  <div class="row my-5">
	  	<div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		 <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<textarea name="" id="comment1" cols="48" rows="5">
			      	</textarea>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			 </div>
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
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			 </div>
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
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			 </div>
		  </div>
		</div>
		</div>
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body"   >
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			 </div>
		  </div>
		</div>
	</div>
		<div class="col-2">
		  <div class="card">
		    <img src="image/th-18259528.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		   <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </div>
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
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			      
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </div>
			</div>
		  </div>
		</div>
	  </div> 
	<div class="container-fluid">
	  <div class="row my-5">
	  	<div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		 <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        
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
		 <div class="col-2">
		  <div class="card">
		    <img src="image/th-18259528.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        
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
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 1.webp" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			       
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
		 <div class="col-2">
		  <div class="card">
		    <img src="image/image 3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			 </div>
		  </div>
		</div>
	</div>
		<div class="col-2">
		  <div class="card">
		    <img src="image/th-18259528.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="image/th-18259528.jpgard-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
		    </div>
		   <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment Box</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			       
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </div>
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
		  <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Comment
		</button>
		</center>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">Feedback</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body" id="comment">
			      
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </div>
			</div>
		  </div>
		</div>
	  </div> 
	</div>
		
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
 <!-- contact us -->
	
<!-- contact us end -->

	<!-- feedback -->
	<br>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Feed Back Box </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="comment">
      	<textarea name="" id="" cols="45" rows="5">This is a wider card with supporting text below as a natural lead-in to additional content.</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
   </div>
  </div>
  	

 	<br>

  	<center>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    FeedBack Box
    </button>
		</center>
	<br>

	<!-- feedback End-->
	<!-- footer -->
	<?php
	include("footer.php")
	?>

	<!-- footer End -->

		<div class="row">
			<div class="col text-center text-white py-2 bg-secondary">
				<span class="fw-lighter">@Copyright <?php date_default_timezone_set("Asia/Karachi"); echo date("Y"); ?></span><span class="fw-bold"> | Developed By: HIST Software Team </span>
			</div>
		</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>