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
<?php echo " <h2>Reciptionest  ". $_SESSION['Username']."</h2>";
?>

<a href ="Find/FindAdmin.php">
<input type="submit" value="Reciptionests" name="AddAdmin">
</a>
<a href ="Find/FindPatient.php">
<input type="Submit" value="Patients" name="Search">
</a>
<a href ="Find/FindDoctor.php">
<input type="Submit" value="Doctors" name="Doctors">
</a>
<a href ="Parent/AllParents.php">
<input type="Submit" value="Parents" name="Parents">
</a>
<a href ="Meeting/AddMeeting.php">
<input type="Submit" value="New Meeting" name="AddMeeting">
</a>
<a href ="Meeting/MeetingSearch.php">
<input type="Submit" value="Meetings" name="Meeting">
</a>
<a href ="Message/Message.php">
<input type="Submit" value="Messages" name="Messages">
</a>

<hr>
<a href="logout.php">
    <input type="Submit" value="Logout">
</a>
</div>
</body>

</html>
