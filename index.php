<?php 


$servername = "iotproject2023-server.mysql.database.azure.com";
$username = "xbgvnmqlzs";
$password = "NC37L7E8X5PJR420$";

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