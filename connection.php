<?php
$servername = "159.89.47.44";
$username = "pranskeo_finalProject";
$password = "j761B#OXRQyk";
$dbname = "pranskeo_finalProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>