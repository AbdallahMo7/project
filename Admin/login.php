<?php
use function CommonMark\Render\HTML;
include_once("connection.php");
include_once("login_admin.php");
//require("login.php");
session_start();
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
        header("Location:login_admin.php");
    }
}