<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid" style="background-color: #80897b">
	    	<img src="image/logo958920338.jpg" style="width: 75px;">
	    <a class="navbar-brand" href="#"><b>ONLINE BLOGGING APPLICATION</b>
	    </a>
	    	<b>ADMIN PANEL</b>
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

			<button class="model" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"
			style="background-color: #80897b"> login </button>
		    <br> 
		<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warnig" type="submit" style="background-color: #80897b">Search</button>
    	</form>
	</nav>
	<!-- login form -->
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
	<!-- login form End  -->
			</div>
		</div>