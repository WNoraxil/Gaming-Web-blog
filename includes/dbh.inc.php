<?php

// Set the variables
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "project";

// Connection to the projct database.
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

// Give error message if the connection failed.
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
?>
