<?php
$sname = "localhost";
$uname = "root";
$password = "";

$dbname = "valourWD";
$conn = mysqli_connect($sname,$uname,$password,$dbname);
if (!$conn) {
    echo "error";
    exit();
}