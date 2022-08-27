<?php
include_once("../connection.php");
if(isset($_GET["ID"]))
{
    $ID=$_GET["MessageID"];
    $sql="DELETE FROM messagerecparent WHERE MessageID=$ID ";
$conn->query($sql);
}
header("Location:../Message/Message.php");
?>