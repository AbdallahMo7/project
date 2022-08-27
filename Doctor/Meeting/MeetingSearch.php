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


    <h2> <center>All Meetings</center> </h2>


    <a class='btn btn-primary ' href="../Welcome_doctor.php" role="button" id="back">Back</a>
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
                
                <th> Meeting ID</th>
                <th>Doctor ID</th>
                <th>Parent ID</th>
                <th>Date</th>
                <th>Time</th>

            </tr>
        </thead>
        <tbody>
            
<?php 
 
 $sql="SELECT * FROM doctor_parent_meeting";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    $DrID=$row['Dr_ID'];


    echo "
    <tr>
    
    
    <td>$row[ID]</td>
    <td>$row[Dr_ID]</td>
    <td>$row[Parent_ID]</td>
    <td>$row[Date]</td>
    <td>$row[Time]</td>
    <td>
       
    
       
        <a id='btn' class='btn btn-danger btn-sm' name='Delete' href='../Meeting/ViewParent.php?ID=$row[Parent_ID]'> Parent </a>
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