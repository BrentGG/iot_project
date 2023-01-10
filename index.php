<?php 


$servername = "iotproject2023-server.mysql.database.azure.com";
$username = "xbgvnmqlzs";
$password = "NC37L7E8X5PJR420$";

echo "<p>" . $servername . "</p>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>