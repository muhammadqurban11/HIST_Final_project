<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Bootstrap Examples/bootstrap_examples/sidebars/sidebars/.css">
 <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
  <script type="text/javascript" src="Table Data/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="Table Data/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    
    $(document).ready(function () {
      $('#example').DataTable();
  });
  </script>

</head>

	<?php
	include("headeradmin.php");
	?>

    <!-- sidebar -->
  <div class="container-fluid">

  <div class="row">

  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-7">Muhammad Qurban</span>
    </a>
    <hr>
    <div class="dropdown col-4" >
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <ul class="dropdown-menu" >
          <li><a class="dropdown-item" href="post.php">Pending Post</a></li>
          <li><a class="dropdown-item" href="approve.php">Approve Post</a></li>
          <li><a class="dropdown-item" href="reject.php">Reject Post</a></li>
        </ul>
      </div>
        <div class="dropdown col-4">
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          User
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Active_Inactive.php">Active/Inactive</a></li>
          <li><a class="dropdown-item" href="">Follow</a></li>
          <li><a class="dropdown-item" href="">Unfollow</a></li>
        </ul>
      </div>
        <div class="dropdown col-4" >
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Blogs
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="http://localhost/19839%20Muhammad%20Qurban/Day--8/category_blogs.php">Category</a></li>
          <li><a class="dropdown-item" href="http://localhost/19839%20Muhammad%20Qurban/Day--8/odi_category.php">Subcategory</a></li>
          </ul>
        </div>
        <div class="dropdown col-4" >
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Post Info
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="http://localhost/19839%20Muhammad%20Qurban/Day--8/category_blogs.php">All Post</a></li>
          <li><a class="dropdown-item" href="">Add Post</a></li>
          <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php"></a></li>
          <li><a class="dropdown-item" href="http://localhost/index.php/Final%20Project/Day%20Vise%20Backup/Day--8/odi_category.php"></a></li>
          </ul>
        </div>
        <div class="dropdown col-4" >
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Comments
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Active Comment</a></li>
          <li><a class="dropdown-item" href="#">Inactive Comment</a></li>
          </ul>
        </div>
    <div class="dropdown col-4" >
        <br>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Feedback
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Admin</a></li>
          <li><a class="dropdown-item" href="#">User</a></li>
          <li><a class="dropdown-item" href="#">Visitor</a></li>
          </ul>
      </div>
    </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

  <div class="col-8">
    <br>
    <br>
            <h2 style="background-color: #80897b; color: white" align="center" c><b>Admin Dashboard</b></h2>
    <table class="table" border="2" >
        <thead style="background-color: #80897b" align="center">
          <tr>
            <th>No#</th>
            <th>Comment</th>
            <th>Blogs</th>
            <th>Account Request<th>
            <th>Blog Follow/Unfollow<th>

          </tr>
        </thead>
            <tbody style="background-color: lightgray;" align="center">
              <tr>
                <td> 1</td>
                <td> User</td>
                <td><button style="background-color: gray;">Active</button>   <button style="background-color: gray;">Inactive</button></td>
                <td><button style="background-color: orange;">Pending</button>   <button style="background-color: orange;">Approve</button>
                  <button style="background-color: orange;">Reject</button></td>
                <td></td>
                <td><button style="background-color: gray;">Follow</button>   <button style="background-color: gray;">Unfollow</button></td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td>User</td>
                <td><button style="background-color: gray;">Active</button>   <button style="background-color: gray;">Inactive</button></td>
                <td><button style="background-color: orange;">Pending</button>   <button style="background-color: orange;">Approve</button>
                  <button style="background-color: orange;">Reject</button></td>
                <td>  </td>
                <td><button style="background-color: gray;">Follow</button>   <button style="background-color: gray;">Unfollow</button></td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Admin</td>
                <td><button style="background-color: gray;">Active</button>   <button style="background-color: gray;">Inactive</button></td>
                <td><button style="background-color: orange;">Pending</button>   <button style="background-color: orange;">Approve</button>
                  <button style="background-color: orange;">Reject</button></td>
                <td>  </td>
                <td><button style="background-color: gray;">Follow</button>   <button style="background-color: gray;">Unfollow</button></td>
                <td></td>
              </tr>
              <tr>
                <td>4</td>
                <td>User</td>
                <td><button style="background-color: gray;">Active</button>   <button style="background-color: gray;">Inactive</button></td>
                <td><button style="background-color: orange;">Pending</button>   <button style="background-color: orange;">Approve</button>
                  <button style="background-color: orange;">Reject</button></td>
                <td>  </td>
                <td><button style="background-color: gray;">Follow</button>   <button style="background-color: gray;">Unfollow</button></td>
                <td></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Admin</td>
                <td><button style="background-color: gray;">Active</button>   <button style="background-color: gray;">Inactive</button></td>
                <td><button style="background-color: orange;">Pending</button>   <button style="background-color: orange;">Approve</button>
                  <button style="background-color: orange;">Reject</button></td>
                <td>  </td>
                <td><button style="background-color: gray;">Follow</button>   <button style="background-color: gray;">Unfollow</button></td>
                <td></td>
              </tr>
            </tbody>
        </table>
 




    </div>
    </div>
    </div>


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