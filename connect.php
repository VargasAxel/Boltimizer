<?php
$host = "localhost";      // or 127.0.0.1
$username = "root";       // default username in XAMPP
$password = "";           // leave empty in XAMPP
$database = "boltimizer"; // your DB name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
