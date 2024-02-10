<?php


include('connection.php');

if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email= $_POST['email'];
      $password = $_POST['password'];
      $address = $_POST['address'];
      $tel = $_POST['tel'];

      $sql = "INSERT INTO loginpage (name,email,password,address,tel) VALUES ('$name','$email','$password','$address','$tel')";

$query = mysqli_query($conn,$sql);

if(!$query){
    die ("User Not Register".mysqli_error($conn));
}else{
    header("location:login.php");
}
    
}