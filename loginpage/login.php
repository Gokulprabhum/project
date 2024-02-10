<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM loginpage WHERE email='$email' AND password= '$password'";
    $query=mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($query);
    if(isset($_POST['remember'])){
        setcookie('email',$email,time()+3600*24*7,"/");
        setcookie('password',$password,time()+3600*24*7,"/");
     }
    
     if(is_array($row)){
        $_SESSION['email'] = $row['email'];
        $_SESSION['password']= $row['password'];
    }else{
        echo "<script>alert('Invalid email & password');</script>";
    }
}

if(isset($_SESSION['email'])){
    header("location:loginpage.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background: linear-gradient(to right,rgb(182, 250, 218) 0%,#d5a8e7 100%);
        }
    form {
    border: 5px solid black;
    width :350px;
    margin-top :100px;
    border-radius:20px;
    
}
.input{
      height:30px;
      width:250px;
      border-radius:5px;
      display:block;
}
input::placeholder{
      font-weight:bold;
      font-family:sans-serif;
}
#button{
    font-weight:bold;
      font-family:sans-serif;
      border-radius:5px;
      height:30px;
      width:100px;
      font-size:16px;

}
</style>
</head>
<body>
    <center>
<form action="login.php" method="POST">
<h1> Login Form</h1>
        <input class="input" type="email" name="email" placeholder="Enter Your Email"><br><br>
        <input class="input" type="password" name="password" placeholder="Enter Your Password"><br><br>
        <input type="checkbox" name="remember" value="1">Remember Me<br><br>
        <input id="button" type="submit" name="submit" value="Login"><br><br>
        <h4>Don't have an account ? <a href="index.php">Register Here</a></h4>
        <h4><a href="forgotpassword.php">Forgot Password</a></h4>
</form>
</body>
</html>

