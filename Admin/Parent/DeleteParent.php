<?php
include_once("../connection.php");
if(isset($_GET["ID"]))
{
    $ID=$_GET["ID"];
    $sql="DELETE FROM parent WHERE ID=$ID ";
$conn->query($sql);
}
header("Location:../Parent/AllParents.php");
?>