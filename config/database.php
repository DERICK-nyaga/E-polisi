<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "police_officers";

$conn = new mysqli($host, $user, $password, $dbName);

if($conn->connect_error){
    die("Failed to connect: " . $conn->connect_error);
}
echo "Connection established successfully";

?>