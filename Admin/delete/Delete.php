<?php
include_once("../connection.php");
if(isset($_GET["ID"]))
{
    $ID=$_GET["ID"];
    $sql="DELETE FROM patients WHERE ID=$ID ";
$conn->query($sql);
}
header("Location:../Find/FindPatient.php");
?>