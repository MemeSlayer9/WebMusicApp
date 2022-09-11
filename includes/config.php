<?php 
ob_start();
session_start();
$timezone = date_default_timezone_set("Asia/Manila");
$server = "localhost";
$username = "root";
$password = "";
$db = "music";

$conn = mysqli_connect($server, $username, $password, $db);

 

?>