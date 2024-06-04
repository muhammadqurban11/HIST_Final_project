<?php


include("connection.php");


$query="INSERT INTO USER(first_name, last_name, email, PASSWORD, gender, date_of_birth, user_image, address)
VALUES(?,?,?,?,?,?,?,?)";

$result= mysqli_query($connection,$query);

mysqli_fetch_assoc($result)





?>