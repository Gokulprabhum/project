<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
    <style>
        body{
            background: linear-gradient(to right,rgb(182, 250, 218) 0%,#d5a8e7 100%);
        }
        h1{
            margin-top:100px;
        }
        </style>
</head>
<body>
    <center>
    <h1> Welcome <?php echo $_SESSION ['email'] ?> </h1>
    <a href="logout.php" >Logout</a>
</body>
</html>