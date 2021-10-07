<?php
session_start();
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$host = $url["host"];
$user = $url["user"];
$pwd = $url["pass"];
$dbname = substr($url["path"], 1);

$con = mysqli_connect($host, $user, $pwd,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
