<?php
$servername = "localhost";
$username = "ruizcosta";
$password = "ruizcosta";
$dbname = "empresa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset("utf8");

// Check connection
/*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/
?>