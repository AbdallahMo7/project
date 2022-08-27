<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICONIC</title>
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">

        <a href="Admin/login_admin.php">
        <input type="submit" value="I'm an Reciptionest">
    </a>
    <a href="Doctor/login_doctor.php">
        <input type="submit" value="I'm a Doctor">
    </a>
 
    <a href="Qualitymgr/login_qmgr.php">
        <input type="submit" value="I'm a Quality Manager">
    </a>
        <a href="Parent/login_parent.php">
        <input type="submit" value="I'm a Parent / Custodian">
    </a>
    </div>
</body>
<?php
require("connection.php");

?>
</html>