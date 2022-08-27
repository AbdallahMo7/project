<?php
use function CommonMark\Render\HTML;
include_once("connection.php");
include_once("login_doctor.php");
//require("login.php");
session_start();
if(isset($_POST['submit']))
{
    $FullName=$_POST['FullName'];
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    //$sql=" SELECT * FROM doctor WHERE Username='$Username' AND Password='$Password'";
    $sql=" SELECT * FROM doctor WHERE Username='$Username' AND Password='$Password'";

    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['Username']=$row['Username'];
        $_SESSION['FullName']=$row['FullName'];
        header("Location:Welcome_doctor.php");
    }
    else
    {
        echo "<script>alert('Username or passowrd is invalid') </script>";
        header("Location:login_doctor.php");
    }
}