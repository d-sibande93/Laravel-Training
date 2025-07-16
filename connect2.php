<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "attendance";

$conn = new mysqli("$host", "$user", "$password", "$database");
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
