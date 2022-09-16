<?php
//mysqli 
$servername = "localhost";
$user = "root";
$pass = "";
$db = "library_management_system";

//Session start
session_start();

$con = mysqli_connect($servername,$user,$pass,$db);
if($con->connect_errno){
    die("Connection Failed: ".mysqli_connect_errno());
}
?>