<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ci_serviceenvironnemental";
$date_inscription = date("Y/m/d");
$heure_inscription = date("H:i:s");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  //echo "ok";
}
?>