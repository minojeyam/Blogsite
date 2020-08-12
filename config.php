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
// printing directly to the page
#code...
# echo "Connected successfully <br>";

// printing in console.log
#code...
$db_status = "<script> console.log('Connected to phpmyadmin successfully'); </script>";
echo $db_status;

?>