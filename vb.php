<?php
// Database connection settings
$host = "localhost";      // Change if your database is hosted elsewhere
$username = "root";       // Your database username
$password = "";           // Your database password
$database = "blood_bank_management_system";  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}

// Close connection (optional here)
$conn->close();
?>
