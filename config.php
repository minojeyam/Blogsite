<?php
// Connecting phpmyadmin http://localhost/phpmyadmin/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
      // Passes Servername, Server username, password and DB Name

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
# echo "Connected successfully <br>";
echo("<script>console.log('Connected successfully');</script>");

?>