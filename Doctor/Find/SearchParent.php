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

<?php echo " <h2> <center>Dr.  ". $_SESSION['FullName']."</center></h2>";
?>
 
    <a class='btn btn-primary ' href="../Find/FindParent.php" role="button">Search Parent</a>
    

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
                
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone Number</th>
            
                <th> Patient ID</th>
               
            </tr>
        </thead>
        <tbody>
            
<?php 
 if(isset($_POST['submit']))
{
$find=$_POST['find'];
$sql="SELECT * FROM parent WHERE ID='$find'";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    
    <td>$row[ID]</td>
    <td>$row[FullName]</td>
    <td>$row[Phonenum]</td>

    <td>$row[Patient_ID]</td>

    <td>
       
    
     
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