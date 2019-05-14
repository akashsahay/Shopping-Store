<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE TABLE studdb (
name VARCHAR(255) NOT NULL ,
email VARCHAR(255) NOT NULL,
subject VARCHAR(255) NOT NULL,
message VARCHAR(255) NOT NULL)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>