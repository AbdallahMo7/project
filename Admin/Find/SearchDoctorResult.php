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


 
    <a class='btn btn-primary ' href="../Find/SearchDoctor.php" role="button">Search Doctor</a>
    

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
                
                <th>ID</th>
                <th>Full Name</th>
                <th> Age</th>
            
    
            </tr>
        </thead>
        <tbody>
            
<?php 
 if(isset($_POST['submit']))
{
$find=$_POST['find'];
$sql="SELECT * FROM doctor WHERE FullName='$find'";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    
    <td>$row[ID]</td>
    <td>$row[FullName]</td>
    <td>$row[Age]</td>
 
 
    <td>
       
    <a id='btn'class='btn btn-primary btn-sm' href='../Edit/EditDoctor.php?ID=$row[ID]'> Edit/View </a>
    <a id='btn'class='btn btn-danger btn-sm' name='Delete' href='../delete/DeleteDoctor.php?ID=$row[ID]'> Delete </a>
    <a id='btn'class='btn btn-danger btn-sm' name='Delete' href='../Meeting/Meeting.php?ID=$row[ID]'> Organize Meeting </a>


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