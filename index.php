<?php
include "config.php";
if(!isset($_SESSION['email'])){
   header('Location: signin.php');
}
else{
    header('Location: dashboard.php');
}