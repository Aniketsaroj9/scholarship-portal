<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (mobilno, username, password) VALUES ('9999999999', 'testuser', 'testpass')";
if ($conn->query($sql) === TRUE) {
    echo "Test user inserted successfully.<br>";
} else {
    echo "Error inserting test user: " . $conn->error . "<br>";
}

$conn->close();
?>
