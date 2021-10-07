<?php
include "config.php";
$name=$_POST['name1'];
$email=$_POST['email1'];
$dob = $_POST['dob1'];
$phone = $_POST['phone1'];
$password= sha1($_POST['password1']);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$sql_query = "SELECT * FROM users WHERE email='".$email."'";
$result = mysqli_query($con,$sql_query);
$data = mysqli_num_rows($result);
if(($data)==0){
$sql_query1 = "insert into users(username, Dob, Phone, email, Pwd) values('".$name."', '".$dob."', '".$phone."', '".$email."', '".$password."')";
$query = mysqli_query($con,$sql_query1);
if($query){
echo 1;
}else
{
echo 0;
}
}else{
echo "Email exits";
}
}
mysqli_close ($con);
?>