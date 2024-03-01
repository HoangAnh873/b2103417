<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlnh";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE major (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name_major VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
echo "Table major created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();

?>