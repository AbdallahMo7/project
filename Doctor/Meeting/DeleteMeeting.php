<?php
include_once("../connection.php");
if(isset($_GET["ID"]))
{
    $ID=$_GET["ID"];
    $sql="DELETE FROM doctor_parent_meeting WHERE ID=$ID ";
$conn->query($sql);
}
header("Location:../Meeting/MeetingSearch.php");
?>