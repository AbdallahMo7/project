<?php
include_once("../connection.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["ID"]))
{
    header("Location:../Welcome.php");
    exit;
}
$ID=$_GET["ID"];
$sql="SELECT * FROM parent WHERE ID=$ID";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

if(!$row)
{
    header("location:../Welcome.php");
    exit;
}
$ID=$row["ID"];
$FullName=$row["FullName"];
$Username=$row["Username"];
$Password=md5($row["Password"]);
$Phonenum=$row["Phonenum"];
$Message=$row["Message"];
$Patient_ID=$row["Patient_ID"];

}
else{
$ID=$_POST["ID"];
$FullName=$_POST["FullName"];
$Username=$_POST["Username"];
$Password=md5($_POST["Password"]);
$Phonenum=$_POST["Phonenum"];
$Message=$_POST["Message"];
$Patient_ID=$_POST["Patient_ID"];



}









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <div class="container my-5">
        <h2> <center>Edit Parent</center></h2>
        <hr>
        <br>
        <?php 
        if(!empty($error_msg))
        {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$error_msg</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
       
            <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Username</label>
        <div class="col-sm-6">
        <input type="text" name="Username" class="form-control" placeholder="Username" value="<?php echo $Username; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-6">
        <input type="text" name="ID" class="form-control" placeholder="ID"  readonly="readonly" value="<?php echo $ID; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
        <input type="text" name="Password" class="form-control" placeholder="Password">
    </div>
    </div>
        <div class="row mb-3">
        <label class="col-sm-3 col-form-label">First Name</label>
        <div class="col-sm-6">
        <input type="text" name="FullName" class="form-control" placeholder="Full Name" value="<?php echo $FullName; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Phone Number</label>
        <div class="col-sm-6">
        <input type="text" name="Phonenum" class="form-control" placeholder="Phone Number" value="<?php echo $Phonenum; ?>">
    </div>
    </div>
    
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Message</label>
        <div class="col-sm-6">
        <input type="text" name="Message" class="form-control" placeholder="Message" value="<?php echo $Message; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Patient ID</label>
        <div class="col-sm-6">
        <input type="text" name="Patient_ID" class="form-control" placeholder="Patient ID" value="<?php echo $Patient_ID; ?>">
    </div>
    </div>
   

  </div>

</div>
    </div>
    </div>

    </div>
    </div>
  

        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="../Meeting/Meeting.php" role="button" id="btn"> Back</a>
        
        </div>  
        <style>
            #btn
            {
                float:right;
            }
            </style>
        </div>
      
    </form>
    </div>
</body>
</html>
