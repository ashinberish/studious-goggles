<?php
include "config.php";
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
if ($email != "" && $password != ""){
    $sql_query = "SELECT * FROM users WHERE email='".$email."' AND Pwd='".sha1($password)."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION['email'] = $email;
        echo 1;
    }else{
        echo 0;
    }

}