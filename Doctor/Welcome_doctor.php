<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Welcome</title>

</head>
<body>

<div class=container>
<?php echo " <h2>Dr.  ". $_SESSION['FullName']."</h2>";
?>
<a href ="Find/AllPatient.php">
<input type="Submit" value="All Patient" name="Search">
</a>
<a href ="Find/FindParent.php">
<input type="Submit" value="Find Parent" name="Parent">
</a>
<a href ="Messages/Message.php">
<input type="Submit" value="Messages" name="meeting">
</a>

<hr>
<a href="logout.php">
    <input type="Submit" value="Logout">
</a>
</div>


</body>

</html>