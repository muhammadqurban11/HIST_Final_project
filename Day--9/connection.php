<?php 

 $connection = mysqli_connect("localhost","root","", "Online_Blogging_Application");

 if(mysqli_connect_errno())
 {
 	echo "Error No".mysqli_connect_errno();
 	echo "Error Message". mysqli_connect_error();
 	die("Database Connection Failed ....!");
 }

 ?>