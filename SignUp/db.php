<?php
$servername = "localhost";
$username = "emmanuelmudegu";
$password = "KERnel1998";
$dbname = "studenttable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>