<?php
include_once("../connection.php");

$Parent_ID=$_GET["ID"];

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Dr_ID = $_POST["Dr_ID"];
    $Parent_ID = $_POST["Parent_ID"];
    $Date = $_POST["Date"];
    $Time=$_POST["Time"];
    /*
    $P_FullName=$_POST['P_FullName'];
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    $P_Phonenum=$_POST['P_Phonenum'];
    */
    $sql="SELECT * FROM  doctor_parent_meeting WHERE `Date`='$Date' AND `Time`='$Time'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        header("Location:errormsg.php");
    }
    else
    {
    $sql="INSERT INTO doctor_parent_meeting (`ID`, `Dr_ID`, `Parent_ID`, `Date`, `Time`) 
    VALUES (NULL, '$Dr_ID', '$Parent_ID', '$Date', '$Time')";
    $result=$conn->query($sql);
    if($result)
    {
        header("Location:../Meeting/MeetingSearch.php");

    }
    else
    {
        die(mysqli_error($conn));
    }
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

*/}

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
        <h2> Add Meeting </h2>
        <input type="text" placeholder="Dr ID" name="Dr_ID"  required>
<input type="text" placeholder="Parent ID" name="Parent_ID" value="<?php echo $Parent_ID ?>" required>
<input type="text" placeholder="YYYY/MM/DD" name="Date"  required>
<input type="text" placeholder="00:00:00" name="Time"  required>
<input  type="submit" value="Add Patient" name="submit">

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