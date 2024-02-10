
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM loginpage WHERE email='$email'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <script>
        function validate(){
            var password1 = document.forms["myform"]["password1"].value;
            var password2 = document.forms["myform"]["password2"].value;
            if(!(password1 == password2)){
                alert("Passsowrd Mismatch !!");
                return false;
        }
        if(password1==""){
                alert("Password field must be filled out !!");
                return false;
            }

            var regpassword1 = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
            if(!regpassword1.test(password1)){
                alert("Password should contain atleast one number and one special character !!");
                return false;
            }

            if((password1.length <6) || (password1.length >25)){
                alert("Password should contain atleast 6 letters !!");
                return false;
            }
            if(password2==""){
                alert("Password field must be filled out !!");
                return false;
            }

            var regpassword2 = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
            if(!regpassword2.test(password2)){
                alert("Password should contain atleast one number and one special character !!");
                return false;
            }

            if((password2.length <6) || (password2.length >25)){
                alert("Password should contain atleast 6 letters !!");
                return false;
            }
    }
    
    function myfunction(){
        var password1 = document.getElementById('psw1');
        var password2 = document.getElementById('psw2');
        if((password1.type === "password") || (password2.type === "password")){
            password1.type="text";
            password2.type="text";
        }else{
            password1.type="password";
            password2.type="password";
        }
    }
        </script>

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
<form action="updatepassword.php" method="POST" name="myform" onsubmit="return validate()">
<h1>Change Password Here</h1>
        <input class="input" id="psw1" type="password" name="password1" placeholder="Enter Your Password"><br><br>
        <input class="input" id="psw2" type="password" name="password2" placeholder="Reenter Your Password"><br><br>
        <input type="checkbox" onclick="myfunction()"> Show Password <br><br>
        <input id="button" type="submit" name="submit" value="Reset"><br><br>
        </form>

        <?php }else{
            echo "<script>alert('Invalide Email Id Please Register')</script>";
            header("location:index.php");   
        }
        } ?>
</body>
</html>