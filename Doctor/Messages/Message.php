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


    <h2> <center>All Messages</center> </h2>

    <a class='btn btn-primary ' href="NewMessage.php" role="button">New Message </a>
    <a class='btn btn-primary ' href="../Welcome_doctor.php" role="button" id="back">Back</a>
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
            <th>Message ID</th>
                <th>Parent ID</th>
                <th>Message</th>
                <th>Dr ID</th>
                <th>Dr Message</th>

            </tr>
        </thead>
        <tbody>
            
<?php 
 
 $sql="SELECT * FROM messagedoctrorparent";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    
    <td>$row[MessageID]</td>
    <td>$row[ParentID]</td>   
    <td>$row[MessageParent]</td>
    <td>$row[DrID]</td>   
    <td>$row[MessageDoctor]</td>
    <td>

        <a id='btn' class='btn btn-danger btn-sm' name='Delete' href='ViewParent.php?ID=$row[ParentID]'> Parent </a>
        <a id='btn' class='btn btn-primary btn-sm' name='Delete' href='ViewDoctor.php?ID=$row[DrID]'> Doctor </a>

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