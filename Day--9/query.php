<?php


include("connection.php");


$query="INSERT INTO USER(first_name, last_name, email, PASSWORD, gender, date_of_birth, user_image, address)
VALUES("muhammad", "qurban", "qurbanali11@gmail.com", "", "male", "05/12/2000", "", "Kamber Ali Khan")";





print_r($_REQUEST);




?>