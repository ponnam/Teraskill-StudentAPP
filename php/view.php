<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Students List</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><a href='index.php'>Go Back</a>";

$conn->close();
?>
