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

		#our_courses_heading,#our_team_heading,#about_us_heading,#contact_us_number,#contact_us_heading{
			font-family: header-fonts;
			text-shadow: 3px 4px 2px gray;
		}
	</style>
</head>
<body>

	<!-- Nav -->
		<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #F6B608">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		    	<img src="images/logo.png" style="width: 50px;">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active " aria-current="page" href="#our_courses">Our Courses</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active " aria-current="page" href="#our_team">Our Team</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active " aria-current="page" href="#about_us">About Us</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active " aria-current="page" href="#contact_us">Contact Us</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active " aria-current="page" href="posts.php" target="blank">Posts</a>
		        </li>
		      </ul>
		        <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">Login</button>
		        <button class="btn" type="submit">Register</button>
		    </div>
		  </div>
		</nav>
	<!-- Nav End -->

	<!-- Slider -->
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/abc1.jpg" class="d-block w-100" alt="No Images" style="height:640px;">
		    </div>
		    <div class="carousel-item">
		      <img src="images/three.jpg" class="d-block w-100" alt="No Image" style="height:640px;">
		    </div>
		    <div class="carousel-item">
		      <img src="images/5-slider.jpg" class="d-block w-100" alt="No Image" style="height:640px;">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	<!-- Slider End -->

	<div class="container">
		<!-- Our Courses -->
			<div class="row my-5 text-center" id="our_courses">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="our_courses_heading"> Our Courses </h1>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card">
			      <img src="images/def.pg" class="card-img-top img-fluid" alt="No Image" style="height:200px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold">PHP BASIC</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="images/four.jpg" class="card-img-top img-fluid" alt="No Image" style="height:200px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold">PHP ADVANCE</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="images/def2.jpg" class="card-img-top" alt="..." style="height:200px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold">JAVA BASIC</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Our Courses End -->

		<!-- Our Team -->
			<div class="row my-5 text-center" id="our_team">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="our_team_heading"> Our Team </h1>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card shadow">
			      <img src="images/Team1.jpg" class="card-img-top img-fluid" alt="No Image" style="height:250px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold my-2" style="text-decoration: underline; text-decoration-thickness:2px; text-decoration-color: #62cc09;  text-underline-offset:8px; color:#F6B608;">Web Developer</h5>
			        <p class="card-text mt-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card shadow">
			      <img src="images/Team2.jpg" class="card-img-top img-fluid" alt="No Image" style="height:250px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold my-2" style="text-decoration: underline; text-decoration-thickness:2px; text-decoration-color: #62cc09;  text-underline-offset:8px; color:#F6B608;">Full Stack Developer</h5>
			        <p class="card-text mt-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card shadow">
			      <img src="images/t-4.jpg" class="card-img-top img-fluid" alt="No Image" style="height:250px">
			      <div class="card-body text-center">
			        <h5 class="card-title fw-bold my-2" style="text-decoration: underline; text-decoration-thickness:2px; text-decoration-color: #62cc09;  text-underline-offset:8px; color:#F6B608;">Graphic Designer</h5>
			        <p class="card-text mt-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Our Team End -->

		<!-- About Us -->
			<div class="row my-5 text-center" id="about_us">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="about_us_heading"> About Us </h1>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-lg-8 col-md-12 col-sm-12 d-flex-justify-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
				There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<img src="images/three.jpg" class="img-fluid shadow rounded">
				</div>
			</div>
		<!-- About Us End -->

	</div>
	<div class="container-fluid">
		<!-- Contact Us -->
			<div class="row mt-3 text-center" id="about_us">
				<div class="col">
					<h1 class="text-uppercase fw-bolder" style="text-decoration: underline; text-decoration-thickness:5px; text-decoration-color: #F6B608 ;  text-underline-offset:15px; color: #c4250f;" id="contact_us_heading"> Contact Us </h1>
				</div>
			</div>
			<div class="row" id="contact_us">
				<div class="col bg-primary text-center p-5 mt-5 text-white">
					<h2 id="contact_us_number"> +92-333-7501114 </h2>
					<p> Try is Key of Success </p>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
						</svg>
  						Contact Us
					</button>
				</div>
				<div class="bg-primary pb-4">
					<img src="images/batman(1).gif" id="khanman">
				</div>
			</div>
		<!-- Contact Us End -->

		<!-- Footer -->
			<?php
				include("footer.php");
			?>
		<!-- Footer End -->

	</div>
		<!-- Modal Contact Us -->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="staticBackdropLabel">Message Here</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Name</label>
					  <input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
			        <div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Caste</label>
					  <input type="email" class="form-control" id="exampleFormControlInput1">
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Country</label>
					  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Addressx</label>
					  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Send Message</button>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Modal Contact Us End -->

		<!-- Modal Login -->
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
		<!-- Modal Login End -->
		


	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>