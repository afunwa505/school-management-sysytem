<?php

$servername = "localhodt";
$username = "root";
$password = "";
$database = "sms";
$conn = mysqli_connect("localhost","root","","sms");
if($conn === false){
    die("Error occurred" .mysqli_connect_error());
}
?>