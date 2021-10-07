<?php
session_start();
$host = getenv('HOST'); /* Hostname */
$user = getenv('USER'); /* User */
$pwd = getenv('PASSWORD'); /* Password */
$dbname = getenv("DBNAME"); /* DB name */

$con = mysqli_connect($host, $user, $pwd,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
