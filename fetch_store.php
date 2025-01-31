<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "db_mlab"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch store data
$sql = "SELECT id, m_id, m_name FROM store_material";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th>ID</th><th>Item Code</th><th>Material Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['m_id']}</td><td>{$row['m_name']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No items found.";
}

$conn->close();
?>
