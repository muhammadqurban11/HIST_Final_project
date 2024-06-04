<?php


include("connection.php");


$query="INSERT INTO USER(first_name, last_name, email, PASSWORD, gender, date_of_birth, user_image, address)
VALUES("muhammad", "qurban", "qurbanbhutto11@gmail.com", "qurban123", "Male", "05/06/2000", "", "Qamber Ali Khan")";



print_r($_REQUEST);




?>