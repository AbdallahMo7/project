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


    <h2> <center>All Patients</center> </h2>
    <a class='btn btn-primary' href="FindPatient.php" role="button" id="search">Search Patient</a>
    <br>
    <br>
    <a class='btn btn-primary ' href="../Welcome_doctor.php" role="button" id="back">Back</a>
    <hr>
    <style>
        #search
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
                <th> Age</th>
                <th> Parent ID</th>
                <th> Treatment </th>
                <th> Status </th>
                    <th>Notes</th>
             
            </tr>
        </thead>
        <tbody>
            
<?php 
 /*
        DELETE FROM patients WHERE `patients`.`ID` = 16"?
        */
 $sql="SELECT * FROM patients";
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    echo "
    <tr>
    
    
    <td>$row[ID]</td>
    <td>$row[FullName]</td>
    <td>$row[Phonenum]</td>
    <td>$row[Age]</td>
    <td>$row[Parent_ID]</td>
    <td>$row[Treatment]</td>
    <td>$row[TreatmentApprove]</td>
    <td>$row[Notes]</td>
    <td>
    <a id='btn'class='btn btn-danger btn-sm' name='Delete' href='../Add/AddTreatment.php?ID=$row[ID]'> Add Treatment | Note </a>

    <a id='btn'class='btn btn-success btn-sm' href='FindParent.php?ID=$row[Parent_ID]'> Parent </a> 
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