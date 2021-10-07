<?php
include "config.php";
$email = $_SESSION['email'];
$curpass= mysqli_real_escape_string($con,$_POST['curpass']);
$npass= mysqli_real_escape_string($con,$_POST['npass']);
$sql_query = "SELECT * FROM users WHERE email='".$email."' AND Pwd='".sha1($curpass)."'";
$result = mysqli_query($con,$sql_query);
$data = mysqli_num_rows($result);
if(($data)==0){
    echo "pass incorrect";
}else{
    $sql_query1 = "UPDATE users SET Pwd= '".sha1($npass)."' WHERE email='".$email."'";
    $query = mysqli_query($con,$sql_query1);
    if($query){
        echo 1;
    }else{
        echo 0;
    }
}
mysqli_close ($con);
?>