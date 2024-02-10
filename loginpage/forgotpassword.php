<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
<form action="newpassword.php" method="POST">
<h1> Reset Password</h1>
        <input class="input" type="email" name="email" placeholder="Enter Your Registered Email"><br><br>
        <input id="button" type="submit" name="submit" value="Click Here"><br><br>
        </form>
</body>
</html>