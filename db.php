<?php
$servername = "localhost";
$username = "root"; // Default username for WAMP
$password = "ZK@2314"; // Default password for WAMP (leave empty if not set)
$dbname = "nuqseq";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>