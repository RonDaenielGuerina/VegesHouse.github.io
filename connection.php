<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "ron_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{

    die("Connection error! please connect to the internet.");
}
?>