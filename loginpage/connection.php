<?php

$servername = "localhost";
$username= "root";
$password="";
$database="mydatabase";

$conn =  mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    Die("Database Connection Error".mysqli_connect_error());
}

?>