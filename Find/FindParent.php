
<?php

session_start();
include_once("../connection.php");

?>

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
<?php echo " <h2>Dr.  ". $_SESSION['FullName']."</h2>";

?>
<form action="FindParentResult.php"method="post">
<input type="text" placeholder=" Enter Parent Name " name="find">
 
<input type="submit" value="Search" name="submit">

</form>
<hr>
<form action="../logout.php">
    <input type="submit" value="Logout">
</form>
<form action="../Welcome_doctor.php">
    <input type="submit" value="Back" href="../Welcome_doctor.php">
    </form>
</div>


</body>

</html>