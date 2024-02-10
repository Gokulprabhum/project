<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<body>
    
<?php

include('connection.php');

if(isset($_POST['submit'])){

    $password = $_POST['password1'];

    $sql = "UPDATE loginpage SET password='$password'";
    
    $result = mysqli_query($conn,$sql);
    if(!$result){
        die("Error".mysqli_error($conn));
    }else{
        echo "<script>alert('Password Updated Successfully !!');</script>";
        echo "<script>window.location='login.php';</script>";
    }
}
?>

</body>
</html>
<?php