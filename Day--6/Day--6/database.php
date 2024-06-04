<?php 

 $connection = mysqli_connect("localhost","root","", "Online_Blogging_Application");


 if (mysqli_connect_errno())
 {
 	echo "Error No:".mysqli_connect_errerno();
 	echo "<br>";
 	echo "Error Message".mysqli_connect_error();
 	die("Data Base Connection Failed");
 }
 
 var_dump($connection);





 ?>