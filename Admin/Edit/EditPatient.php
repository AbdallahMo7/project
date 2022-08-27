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
$sql="SELECT * FROM patients WHERE ID=$ID";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

if(!$row)
{
    header("location:../Welcome.php");
    exit;
}
$ID=$row["ID"];
$FullName=$row["FullName"];
$Phonenum=$row["Phonenum"];
$Age=$row["Age"];
$Parent_ID=$row["Parent_ID"];
$Image=$row["Image"];
}
else{
$ID=$_POST["ID"];
$FullName=$_POST["FullName"];
$Phonenum=$_POST["Phonenum"];
$Age=$_POST["Age"];
$Parent_ID=$_POST["Parent_ID"];
$Image=$_POST["Image"];

do
{
if(empty($FullName) || empty($Phonenum) || empty($Age))
{
    $error_msg="All the fields are required";
    break;
}
$sql="UPDATE patients".
" SET FullName='$FullName',Phonenum='$Phonenum',Age='$Age',Image='$Image',Parent_ID='$Parent_ID'".
"WHERE ID=$ID";
$result=$conn->query($sql);
if(!$result)
{
    $error_msg="Invalid Query".$conn->error;
    break;
}
$success_msg=" Updated Successfully";
header("location:../Find/FindPatient.php");
exit;
}while(false);
}









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <div class="container my-5">
        <h2> <center>Edit Patient</center></h2>
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
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
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
        <label class="col-sm-3 col-form-label">Age</label>
        <div class="col-sm-6">
        <input type="text" name="Age" class="form-control" placeholder="Age" value="<?php echo $Age; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Parent ID</label>
        <div class="col-sm-6">
        <input type="text" name="Parent_ID" class="form-control" placeholder="Parent ID" value="<?php echo $Parent_ID; ?>">
    </div>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" name="Image" value="<?php echo $Image;  ?>">
   

  </div>

</div>
    </div>
    </div>

    </div>
    </div>
    <?php 
    if(!empty($success_msg))
    {
        echo "
        <div class='row mb-3'>
        <div class='offset-sm-3 col-sm-6'>
        <div class='alert alert-success alert-dimissible fade show' role='alert'>
        <strong>$success_msg</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='Close'></button>
        </div>
        </div>
        </div>
        ";
    }
    ?>
    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
        </div>
        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="../Find/FindPatient.php" role="button"> Cancel</a>
        </div>  
        </div>
    </form>
    </div>
</body>
</html>
