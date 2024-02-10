<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

<style>
    body{
        background: linear-gradient(to right,rgb(182, 250, 218) 0%,#d5a8e7 100%);
    }

form {
    border: 5px solid black;
    width :350px;
    margin-top :30px;
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
        <script>
        function validate(){
            var name = document.forms["myform"]["name"].value;
            var email = document.forms["myform"]["email"].value;
            var password = document.forms["myform"]["password"].value;
            var address = document.forms["myform"]["address"].value;
            var tel = document.forms["myform"]["tel"].value;
            if(name==""){
                alert("Name field must be filled out !!");
                return false;
            }
            var regname = /^[a-zA-Z\s]+$/;
            if(!regname.test(name)){
                alert("Name should contain alphabets only !!");
                return false;
            }

            if((name.length <3) || (name.length >25)){
                alert("Invalid !!");
                return false;
            }

            if(email==""){
                alert("Email field must be filled out !!");
                return false;
            }
             
            if(password==""){
                alert("Password field must be filled out !!");
                return false;
            }

            var regpassword = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
            if(!regpassword.test(password)){
                alert("Password should contain atleast one number and one special character !!");
                return false;
            }

            if((password.length <6) || (password.length >25)){
                alert("Password should contain atleast 6 letters !!");
                return false;
            }

            if(address==""){
                alert("Address field must be filled out !!");
                return false;
            }

            if(tel==""){
                alert("Phonenumber field must be filled out !!");
                return false;
            }

            var regtel = /^[0-9]{10}$/;
            if(!regtel.test(tel)){
                alert("Invalid phone number !!");
                return false;
            }
       
}
        </script>
</head>
<body>
    <center>
    <form name="myform" onsubmit="return validate()" action="insert.php" method="post" >
        <h1> Registraion Form</h1>
        <input class="input" type="text" name="name" placeholder="Enter Your Name"><br><br>
        <input class="input" type="email" name="email" placeholder="Enter Your Email"><br><br>
        <input class="input" type="password" name="password" placeholder="Enter Your Password"><br><br>
        <input class="input" type="text" name="address" placeholder="Enter Your Address"><br><br>
        <input class="input" type="tel" name="tel" placeholder="Enter Your PhoneNumber"><br><br>
        <input id="button" type="submit" name="submit" value="Register"><br><br>
        <h4>Have an account? <a href="login.php">Login Here</a></h4> 
</form>

</body>
</html>