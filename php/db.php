<?php
$host = "mysql-db";
$user = "root";
$pass = "root";
$db = "studentdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
