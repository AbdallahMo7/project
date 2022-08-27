<?php
include_once("../connection.php");
session_start();
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


 
    <a class='btn btn-primary ' href="../Meeting/AddMeeting.php" role="button">New Meeting</a>
    

    <a class='btn btn-primary ' href="../Welcome.php" role="button" id="back">Back</a>
    <hr>
    <style>
   
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
             <th>Meeting ID</th>
                <th>Dr Name</th>
                <th>Dr ID</th>
                <th>Parent ID</th>
                <th> Date</th>
                <th> Time</th>
    
            </tr>
        </thead>
        <tbody>
            
<?php 
 if(isset($_POST['submit']))
{
$Dr_ID=$_POST['find'];
$sql="SELECT * FROM doctor INNER JOIN doctor_parent_meeting ON  doctor.ID=doctor_parent_meeting.Dr_ID";

 $result=$conn->query($sql);

 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    <td>$row[ID]</td>
    <td>$row[FullName]</td>
    <td>$row[Dr_ID]</td>

    <td>$row[Parent_ID]</td>
    
    <td>$row[Date]</td>
    <td>$row[Time]</td>
 
    <td>
       

    <a id='btn'class='btn btn-danger btn-sm' name='Delete' href='../Meeting/DeleteMeeting.php?ID=$row[ID]'> Delete </a>

    <a id='btn'class='btn btn-success btn-sm' href='../Meeting/ViewParentMeeting.php?ID=$row[Parent_ID]'> Parent </a>
    <a id='btn'class='btn btn-success btn-sm' href='../Parent/ViewParent.php?ID=$row[Dr_ID]'> Doctor </a>
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
}
?>  
</div>

</body>

</html>