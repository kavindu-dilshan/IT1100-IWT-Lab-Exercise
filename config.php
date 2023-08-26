<?php
$conn = new mysqli('localhost','root','','shopping cart');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully.";
?>