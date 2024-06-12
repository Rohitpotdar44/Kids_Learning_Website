<?php 

$host = "127.0.0.1";
$db_username = "root";
$db_password="";
$db_name = "mini project";

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    die("". mysqli_connect_error());
}
?>