<?php
ob_start(); //turns on output buffering
session_start();

$timezone = date_default_timezone_set("America/Edmonton");
$con = mysqli_connect("localhost", "root", "", "social");

if(mysqli_connect_errno()){
    echo "failed to connect:".mysqli_connect_errno();
}
?>