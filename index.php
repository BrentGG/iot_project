<?php echo '<p>Hello World</p>'; ?>

<?php
$servername = env('DB_HOST', '127.0.0.1');
$username = env('DB_USERNAME', 'forge');
$password = env('DB_PASSWORD', '');

echo "<p>" . $servername . "</p>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>