<?php
include "config.php";
if(!isset($_SESSION['email'])){
   header('Location: ./src/signin.php');
}
else{
    header('Location: ./src/dashboard.php');
}