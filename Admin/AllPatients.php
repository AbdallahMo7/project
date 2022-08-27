<?php
include_once("connection.php");
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
    <h2> All Patients </h2>
    <a class='btn btn-primary ' href="Add/AddPatient.php" role="button">Add Patient</a>
    <a class='btn btn-primary ' href="Welcome.php" role="button">Back</a
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th> Age</th>
                <th> Parent ID</th>
            </tr>
        </thead>
        <tbody>
<?php 
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
    <td>
        <a class='btn btn-primary btn-sm'> Edit </a>
        <a class='btn btn-danger btn-sm'> Delete </a>
    </td>
</tr>
    ";
}
?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class='btn btn-primary btn-sm' href=""> Edit </a>
                    <a class='btn btn-danger btn-sm' href=""> Delete </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>

</html>