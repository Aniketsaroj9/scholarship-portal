<?php
// Mock POST data for sign-up
$_POST['sign-up'] = true; // Button name
$_POST['number'] = '8888888888';
$_POST['username'] = 'SimulatedUser';
$_POST['password'] = 'SimulatedPass';

// Buffer output
ob_start();
include 'signup.php';
$output = ob_get_clean();

echo "Output from signup.php:\n";
echo $output . "\n";

// Check if inserted
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SELECT * FROM login WHERE username='SimulatedUser'");
if ($result->num_rows > 0) {
    echo "SUCCESS: Test user found in login table.\n";
    $row = $result->fetch_assoc();
    print_r($row);
} else {
    echo "FAILURE: Test user NOT found in login table.\n";
    echo "Error: " . $conn->error . "\n";
}
$conn->close();
?>
