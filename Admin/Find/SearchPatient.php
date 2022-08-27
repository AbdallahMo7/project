<!----
<?php

session_start();
include_once("../connection.php");
/*
if(isset($_POST['submit']))
{
$find=$_POST['find'];
$sql=$conn->prepare("SELECT * FROM patient WHERE FullName='$find'");
$result=$conn->query($sql);
$row=$result->fetch_assoc();
while($row=$result->fetch_assoc())
{
    
    echo
    "<br><br><br>
    <table>
    <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Phone Number</th>
    <th>Age</th>
    <th>Parent ID</th>
    <th>Treatment</th>
    <th>Notes</th>
    </tr>
    <tr>

    </tr>
    </table>
    ";
}
}
*/
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login_style.css">
    <title>Welcome</title>

</head>
<body>

<div class=container>
 <h2> Search Patient</h2>
<form action="SeachPatientResult.php"method="post">
<input type="text" placeholder=" Enter Patient Name " name="find">
 
<input type="submit" value="Search" name="submit">

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