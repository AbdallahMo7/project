<?php
include_once("../connection.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["ID"]))
{
    header("Location:../Welcome_doctor.php");
    exit;
}
$ID=$_GET["ID"];
$sql="SELECT * FROM patients WHERE ID=$ID";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

if(!$row)
{
    header("location:../Welcome_doctor.php");
    exit;
}
$ID=$row["ID"];
$Treatment=$row["Treatment"];
$TreatmentApprove=$row["TreatmentApprove"];
$Notes=$row["Notes"];
}
else{
$ID=$_POST["ID"];
$Treatment=$_POST["Treatment"];
$TreatmentApprove=$_POST["TreatmentApprove"];
$Notes=$_POST["Notes"];
if($TreatmentApprove!='Approved')
{
$sql="UPDATE patients".
" SET Treatment='$Treatment',Notes='$Notes'".
"WHERE ID=$ID";
$result=$conn->query($sql);
}
else
{
    echo"its already approved";
}
header("Location:../Find/AllPatient.php");

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
        <label class="col-sm-3 col-form-label">Treatment</label>
        <div class="col-sm-6">
        <input type="text" name="Treatment" class="form-control" placeholder="Add Treatment" value="<?php echo $Treatment; ?>">
    </div>
    </div>
    
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Status</label>
        <div class="col-sm-6">
        <input type="text" name="TreatmentApprove" class="form-control" placeholder="Not Approved yet"  readonly="readonly" value="<?php echo $TreatmentApprove; ?>">
    </div>
    </div>
    
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Notes</label>
        <div class="col-sm-6">
        <input type="text" name="Notes" class="form-control" placeholder="Add note"  value="<?php echo $Notes; ?>">
    </div>
    </div>
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
       
        <button type="submit"  class="btn btn-primary">Submit Changes</button>
        
        </div>

        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="../Find/FindPatient.php" role="button"> Cancel</a>
        </div>  
        </div>
    </form>
    </div>
</body>
</html>
