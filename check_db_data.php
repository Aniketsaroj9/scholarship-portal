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

echo "<h3>Login Table Data:</h3>";
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    echo "<pre>";
    while($row = $result->fetch_assoc()) {
        print_r($row);
    }
    echo "</pre>";
} else {
    echo "Login table is empty.<br>";
}

echo "<h3>Registration Table Data:</h3>";
$sql = "SELECT * FROM reg";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    echo "<pre>";
    while($row = $result->fetch_assoc()) {
        print_r($row);
    }
    echo "</pre>";
} else {
    echo "Registration table is empty.<br>";
}
$conn->close();
?>
