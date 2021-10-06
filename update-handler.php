<?php
include "config.php";
$email = $_SESSION['email'];
$name=$_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$sql_query1 = "UPDATE users SET username = '".$name."', Dob = '".$dob."', Phone = '".$phone."' WHERE email= '".$email."' ";
$query = mysqli_query($con,$sql_query1);
if($query){
echo 1;
}else
{
echo 0;
}
mysqli_close ($con);
?>