<?php
include_once("../connection.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Username = $_POST["Username"];
    $Password = md5($_POST["Password"]);
    
    /*
    $P_FullName=$_POST['P_FullName'];
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    $P_Phonenum=$_POST['P_Phonenum'];
    */
    $sql="INSERT INTO admin (ID,`Password`, Username)".
    "VALUES (NULL,'$Password', '$Username')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:../Welcome.php");

    }
    else
    {
        die(mysqli_error($conn));
    }
    /*
    $sql="INSERT INTO parent (FullName,Username,Password,Phonenum)
    VALUES ($P_FullName,$Username,$Password,$P_Phonenum)";
$result2=mysqli_query($conn,$sql);
if($result2)
{
    echo" Parent Added Successfully";
}
else
{
    die(mysqli_error($conn));
}
    
}

*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICONIC</title>
    <link rel="stylesheet" href="../login_style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    <form class="container" method="POST">
        <h2> Add Admin </h2>
        <input type="text" placeholder="Username" name="Username" required>
<input type="text" placeholder="Password" name="Password"  required>

<input  type="submit" value="Add Admin" name="submit">

<!--
<h2> Add Parent </h2>
<input type="text" placeholder=" Parent Full name" name="P_FullName" required>
<input type="text" placeholder="Username" name="Username"  required>
<input type="text" placeholder="Password" name="Password"  required>
<input type="text" placeholder="Phone Number" name="P_Phonenum"  required>
-->
</form>
</body>
</html>