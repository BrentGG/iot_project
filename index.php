<?php 

echo "<p>Hello Bryan</p>";

$servername = "";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

echo "<p>Test</p>";

// Check connection
if ($conn->connect_error) {
    echo "<p>Connection failed</p>";
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully</p>";
?>