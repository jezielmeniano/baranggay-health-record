<?php

$server = "localhost";
$userid = "root";
$pwd = "";
$dbname = "db-system";

$conn = new mysqli($server, $userid, $pwd, $dbname);

if($conn->connect_error){
    die("Database connection error".$conn->connect_error);
}
