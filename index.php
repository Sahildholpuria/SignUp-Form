<?php

$server = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($server, $username, $password);

// if (!$connection) {
//     # code...
//     die(mysqli_connect_errno());   
// }

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO `form`.`form` (`name`, `age`, `email`) VALUES ('$name', '$age', '$email');";

// if ($connection -> query($sql)==true) {
    
//     echo "Successful insert into db";
// }
$connection ->close(); 

?>