<?php
include_once("../connection.php");
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $ParentID=$_POST["ParentID"];
    $RecMessage=$_POST["RecMessage"];
    $RecID=$_POST["RecID"];
    
    /*
    $P_FullName=$_POST['P_FullName'];
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    $P_Phonenum=$_POST['P_Phonenum'];
    */
    $sql="INSERT INTO messagerecparent (MessageID,RecID,ParentID,RecMessage,ParentMessage)
    VALUES (NULL,'$RecID','$ParentID','$RecMessage','')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:Message.php");

    }
    else
    {
        die(mysqli_error($conn));
    }
    
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login_style.css">
    <title>New Message</title>

</head>
<body>

<div class=container>
 <h2> Send Message</h2>
<form method="POST">
<input type="text" placeholder=" Enter Parent ID " name="ParentID">
<input type="text" placeholder=" Enter Message  " name="RecMessage">
<input type="text" placeholder=" Enter Your ID  " name="RecID">
 
<input type="submit" value="Send" name="submit">

</form>
<hr>    
<form action="../logout.php">
    <input type="submit" value="Logout">
</form>
<form action="../Welcome.php">
    <input type="submit" value="Back" href="../Welcome.php">
    </form>
</div>


</body>

</html>