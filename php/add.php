<?php
include 'db.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "INSERT INTO students (firstname, lastname, email) VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Student added successfully!<br><br>";
    echo "<a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
