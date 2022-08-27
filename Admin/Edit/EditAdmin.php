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
$sql="SELECT * FROM admin WHERE ID=$ID";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

if(!$row)
{
    header("location:../Welcome.php");
    exit;
}
$ID=$row["ID"];
$Username=$row["Username"];
$Password=md5($row["Password"]);

}
else{
$ID=$_POST["ID"];
$Username=$_POST["Username"];
$Password=md5($_POST["Password"]);


do
{
if(empty($Username) || empty($Password))
{
    $error_msg="All the fields are required";
    break;
}
$sql="UPDATE admin".
" SET Username='$Username',Password='$Password'".
"WHERE ID=$ID";
$result=$conn->query($sql);
if(!$result)
{
    $error_msg="Invalid Query".$conn->error;
    break;
}
$success_msg=" Updated Successfully";
header("location:../Find/FindAdmin.php");
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
    <title>Edit Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <div class="container my-5">
        <h2> <center>Edit Admin</center></h2>
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
        <label class="col-sm-3 col-form-label">Username</label>
        <div class="col-sm-6">
        <input type="text" name="Username" class="form-control" placeholder="Username" value="<?php echo $Username; ?>">
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
        <input type="text" name="Password" class="form-control" placeholder="New Password">
    </div>
    </div>
    
    
    <div class="row mb-3">

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
            <a class="btn btn-outline-primary" href="../Find/FinaAdmin.php" role="button"> Cancel</a>
        </div>  
        </div>
    </form>
    </div>
</body>
</html>
