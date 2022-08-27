<?php
$conn=new mysqli("localhost","root","","hospitaldb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "<script>console.log('connection successfull with mysql db')</script>";
}
/*$sqlstmt="SELECT * FROM admin";
$result=$conn->query($sqlstmt);

//echo $result->num_rows;
//Fetch associative array
while($row=$result->fetch_assoc())
{
    echo ("Username : ") .  $row["Username"]."<hr>";
    echo("Password : ") . $row["Password"];
}
*/

?> 