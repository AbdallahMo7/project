<?php
include_once("login.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICONIC</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>


    <form action="login.php" method="post" class="container">
        <h2> Welcome Doctor </h2>
        <input type="text" placeholder="Username" name="Username" required>
<input type="password" placeholder="Password" name="Password"  required>
<input  type="submit" value="Login" name="submit">
    </form>
</body>

</html>