<?php
$host = "localhost";
$username = "root";
$pass = "";
$db_name = "chrome_db";
$connection = mysqli_connect($host,$username,$pass,$db_name);
//check if connection failed
if (!isset($connection)){
    die("DB connection failed");
}
