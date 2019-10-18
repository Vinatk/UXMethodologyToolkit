<!-- Php connect to Sql DB-->
<?php

$servername = "mariadb";
$username = "dbuser";
$password = "password";
$dbname = "mscproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
