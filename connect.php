<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$con = new mysqli($servername ,$username ,$password, $dbname);

if(!$con){
    die(mysqli_error($con));
}
?>