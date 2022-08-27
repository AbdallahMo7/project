<?php
include_once("../connection.php");
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
    $sql="INSERT INTO messagerecparen (MessageID,RecID,ParentID,RecMessage,ParentMessage)".
    "VALUES (NULL,'$RecID', '$ParentID','$RecMessage','')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:Message.php");

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
