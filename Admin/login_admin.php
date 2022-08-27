<?php
//include("connection.php");
include_once("login.php");
error_reporting(0);
/*session_start();
if(isset($_POST['submit']))
{
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    $sql=" SELECT * FROM admin WHERE Username='$Username' AND Password='$Password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['Username']=$row['Username'];
        header("Location:Welcome.php");
    }
    else
    {
        echo "<script>alert('Username or passowrd is invalid') </script>";
    }
}*/
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

    <form action=""  class="container" method="POST">
        <h2> Reciptionest Login </h2>
        <input type="text" placeholder="Username" name="Username" required>
<input type="password" placeholder="Password" name="Password"  required>
<input  type="submit" value="Login" name="submit">
    </form>
</body>

</html>