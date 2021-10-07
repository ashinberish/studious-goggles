<?php
session_start();
$host = "localhost"; /* Hostname */
$user = "root"; /* User */
$pwd = "Ashin@190301"; /* Password */
$dbname = "login"; /* DB name */

$con = mysqli_connect($host, $user, $pwd,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}