<?php
include_once("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICONIC</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<div class="container my-5">


    <h2> <center>All Admins</center> </h2>
    <input type="search" placeholder=Search>
    <a class='btn btn-primary ' href="../Add/AddAdmin.php" role="button">Add Admin</a>
    <a class='btn btn-primary ' href="../Welcome.php" role="button" id="back">Back</a>
    <hr>
    <style>
        input[type=search]
        {
            float:right;
        }
        #back
        {
            position: absolute;
            bottom: 8px;
            left: 125px;
            font-size: 18px;
            float:left;
        }
        </style>
    <table class="table">
        
        <thead>
            
            <tr>
                
                <th>ID</th>
                <th>Username</th>

            </tr>
        </thead>
        <tbody>
            
<?php 
 
 $sql="SELECT * FROM admin";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    
    <td>$row[ID]</td>
    <td>$row[Username]</td>
    <td>
        <a id='btn' class='btn btn-primary btn-sm' href='../Edit/EditAdmin.php?ID=$row[ID]'> Edit </a>
       
    
       
        <a id='btn' class='btn btn-danger btn-sm' name='Delete' href='../delete/DeleteAdmin.php?ID=$row[ID]'> Delete </a>
        <style>
        #btn
        {
           float:right;
           margin:5px;
        }
        </style>
</td>
</tr>
    ";
}
?>  
</div>

</body>

</html>