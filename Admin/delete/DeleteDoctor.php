<?php
include_once("../connection.php");
if(isset($_GET["ID"]))
{
    $ID=$_GET["ID"];
    $sql="DELETE FROM doctor WHERE ID=$ID ";
$conn->query($sql);
}
header("Location:../Find/FindDoctor.php");
?>