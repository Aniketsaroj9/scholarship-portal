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

echo "DEBUG: Checking login table...\n";
$sql = "SELECT count(*) as count FROM login";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Count in login: " . $row['count'] . "\n";

$sql = "SELECT * FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ROW: " . implode(", ", $row) . "\n";
    }
} else {
    echo "Login table is empty.\n";
}

echo "DEBUG: Checking reg table...\n";
$sql = "SELECT count(*) as count FROM reg";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Count in reg: " . $row['count'] . "\n";

$conn->close();
?>
